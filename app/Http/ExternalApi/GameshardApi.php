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
    public function pullRoundsIds(string $tournamentId, string $phaseId): Collection
    {
        $rounds = Http::acceptJson()
            ->withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/tournaments/$tournamentId/phases/$phaseId/rounds")
            ->throw()
            ->json('data');

        return collect($rounds)->pluck('id');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesFromRoundId(string $roundId)
    {
        return Http::withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/matches?filter[round_id]=$roundId")
            ->throw()
            ->json('data');
    }

    /**
     * @throws RequestException
     */
    public function pullMatchesIdsFromRoundId(string $roundId): Collection
    {
        $matches = $this->pullMatchesFromRoundId($roundId);

        return collect($matches)->pluck('id');
    }

    /**
     * @throws RequestException
     */
    public function pullGamesIds(string $matchId): Collection
    {
        $games = Http::acceptJson()
            ->withToken($this->gameshardToken)
            ->get("https://gameshard.io/api/matches/$matchId/games")
            ->throw()
            ->json('data');

        return collect($games);
    }
}
