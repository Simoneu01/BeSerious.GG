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
    public function pullPlaydays(int $tournamentId, int $phaseId): Collection
    {
        $playdays = Http::withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/tournaments/$tournamentId/phases/$phaseId/rounds")
            ->throw()
            ->json('data');

        return collect($playdays)->pluck('id');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesFromPlayday(string $playday)
    {
        return Http::withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/matches?filter[round_id]=$playday")
            ->throw()
            ->json('data');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesIdsFromPlayday(string $playday)
    {
        $matches = $this->pullMatchesFromPlayday($playday);

        return collect($matches)->pluck('id');
    }
}
