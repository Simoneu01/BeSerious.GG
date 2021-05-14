<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Rankings extends Component
{
    public Collection $rankings;

    public bool $killcache = false;

    protected $queryString = [
        'killcache' => ['except' => false],
    ];

    public function mount()
    {
        if ($this->killcache) {
            Cache::forget('rankings');
        }

        /** @var Collection $rankings */
        $rankings = Cache::rememberForever('rankings', function () {
            $playday = Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . config('services.gameshard.api_key'),
            ])->get('https://gameshard.io/api/tournaments/75/phases/47/rounds');

            $playdayIds = collect($playday->json('data'))->pluck('id');

            $matchesIds = collect([]);
            $playdayIds->each(fn($playday) => $matchesIds->push(collect(Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . config('services.gameshard.api_key'),
            ])->get("https://gameshard.io/api/matches?filter[round_id]=$playday")->json('data'))->pluck('id')));

            $gameIds = collect([]);
            $matchesIds->flatten()->each(fn($match) => $gameIds->push(collect(Http::withHeaders([
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . config('services.gameshard.api_key'),
            ])->get("https://gameshard.io/api/matches/$match/games")->json('data'))));

            // Inizializzo rankings a 0
            $games = $gameIds->filter(fn(Collection $game) => $game->first()['played_at']);
            $rankings = [];
            foreach ($games as $game) {
                $game = $game->first();
                foreach($game['contestants'] as $contestant) {
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
            foreach($games as $game) {
                $game = $game->first();
                $homeContestant = $game['contestants'][0];
                $awayContestant = $game['contestants'][1];
                if ($homeContestant['score'] + $awayContestant['score'] > 12) {
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
            $rankings = $rankings->sortBy([
                ['points', 'desc']
            ]);

            return $rankings;
        });

       $this->rankings = $rankings;
    }

    public function getTrophyColor(int $position): string
    {
        return match($position) {
            1 => "#FFD147",
            2 => "#C9C8CC",
            3 => "#B5785B",
            default => "#000000",
        };
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.rankings');
    }
}
