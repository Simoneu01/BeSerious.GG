<?php

namespace App\Http\ExternalApi;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class GameshardApi
{
    private string $gameshardToken;

    public function __construct()
    {
        $this->gameshardToken = config('services.gameshard.api_key');
    }

    /**
     * @throws RequestException
     */
    public function pullPlayDays(int $tournamentId, int $phaseId): Collection
    {
        $playDays = Http::withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/tournaments/$tournamentId/phases/$phaseId/rounds")
            ->throw()
            ->json('data');

        return collect($playDays)->pluck('id');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesFromPlayDay(string $playDay)
    {
        return Http::withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/matches?filter[round_id]=$playDay")
            ->throw()
            ->json('data');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesIdsFromPlayDay(string $playDay): Collection
    {
        $matches = $this->pullMatchesFromPlayday($playDay);

        return collect($matches)->pluck('id');
    }
}
