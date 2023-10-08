<?php

namespace App\Http\Livewire;

use App\Http\ExternalApi\GameshardApi;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Rankings extends Component
{
    public Collection $rankings;
    public string $year = '2021';
    public bool $killcache = false;

    protected $queryString = [
        'killcache' => ['except' => false],
    ];

    public function mount(GameshardApi $gameShardApi)
    {
        if ($this->killcache) {
            Cache::forget('rankings' . $this->year);
        }

        [$tournamentUuid, $phaseUuid] = match($this->year) {
            '2020' => ['f6d9cf5f-9c31-44c6-8693-b99d769b929c', 'ef76c5d2-757b-4ff3-8109-41ea0c1dbb3b'],
            '2021' => ['1f13aad9-0459-448a-b14b-537bbf4cfc6f', 'a64424d6-f061-4e12-bc28-2d967040c2c3'],
            default => ['b873126e-ad58-48e0-8a39-e43b2adf35e6', '7c786925-e76e-4b85-b6fb-91c148fa8a1b'],
        };

        /** @var Collection $rankings */
        $rankings = Cache::rememberForever('rankings' . $this->year, function () use ($gameShardApi, $tournamentUuid, $phaseUuid) {

            $playDaysIds = $gameShardApi->pullRoundsIds($tournamentUuid, $phaseUuid);

            $matchesIds = collect();
            $playDaysIds->each(fn (string $playDayId) => $matchesIds->push($gameShardApi->pullMatchesIdsFromRoundId($playDayId)));

            $allGames = collect();
            $matchesIds->flatten()->each(fn ($matchId) => $allGames->push($gameShardApi->pullGamesIds($matchId)));

            // Inizializzo rankings a 0
            $games = $allGames->filter(fn (Collection $game) => $game->first()['played_at']);
            $rankings = [];
            foreach ($games as $game) {
                $game = $game->first();
                foreach ($game['contestants'] as $contestant) {
                    $rankings[$contestant['id']] = [
                        'win' => 0,
                        'loss' => 0,
                        'ot_win' => 0,
                        'ot_loss' => 0,
                        'contestant' => [
                            'id' => $contestant['id'],
                            'name' => $contestant['name'],
                            'avatar' => $contestant['avatar']
                        ],
                        'points' => 0
                    ];
                }
            }

            /*
             * Imposto il numero di win, loss, ot_win e ot_loss
             */
            foreach ($games as $game) {
                $game = $game->first();
                $homeContestant = Arr::get($game['contestants'],0, null);
                if (!$homeContestant) {
                    continue;
                }
                $awayContestant = Arr::get($game['contestants'],1, null);
                if (!$awayContestant) {
                    continue;
                }
                if ((int) $homeContestant['score'] + (int) $awayContestant['score'] > 12) {
                    // Overt Time
                    if ($homeContestant['score'] > $awayContestant['score']) {
                        $rankings[$homeContestant['id']]['ot_win']++;
                        $rankings[$awayContestant['id']]['ot_loss']++;
                    } else {
                        $rankings[$awayContestant['id']]['ot_win']++;
                        $rankings[$homeContestant['id']]['ot_loss']++;
                    }
                } else {
                    // Regular Time
                    if ($homeContestant['score'] > $awayContestant['score']) {
                        $rankings[$homeContestant['id']]['win']++;
                        $rankings[$awayContestant['id']]['loss']++;
                    } else {
                        $rankings[$awayContestant['id']]['win']++;
                        $rankings[$homeContestant['id']]['loss']++;
                    }
                }
            }

            /**
             * tempi regolamentari +3 punti alla squadra vincitrice e +0 alla squadra perdente
             * tempi supplementari +2 punti alla squadra vincitrice e +1 punto alla squadra perdente.
             */
            foreach ($rankings as $index => $ranking) {
                $rankings[$index]['points'] = ($ranking['win'] * 3) + ($ranking['loss'] * 0) + ($ranking['ot_win'] * 2) + ($ranking['ot_loss'] * 1);
            }

            $rankings = collect($rankings);
            return $rankings->sortBy([
                ['points', 'desc']
            ]);
        });

        $this->rankings = $rankings;
    }

    public function getTrophyColor(int $position): string
    {
        return match ($position) {
            1 => "#FFD147",
            2 => "#C9C8CC",
            3 => "#B5785B",
            default => "000000",
        };
    }

    public function render(): View
    {
        return view('livewire.rankings')
            ->layout('layouts.guest');
    }
}
