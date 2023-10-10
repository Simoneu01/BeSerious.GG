<?php

namespace Feature\ExternalApi;

use App\Http\ExternalApi\GameshardApi;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class GameShardApiTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
    }

    public function test_pull_rounds_ids()
    {
        Http::fake([
            'https://gameshard.io/api/tournaments/98bfa269-4fce-4bb1-84c7-7ba0ed4d1da0/phases/98bfa734-0f8c-4949-a352-c7e8654f50d3/rounds' => Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/rounds.json')), true), 200),
        ]);

        $gameshardApi = new GameshardApi();
        $roundsIds = $gameshardApi->pullRoundsIds('98bfa269-4fce-4bb1-84c7-7ba0ed4d1da0', '98bfa734-0f8c-4949-a352-c7e8654f50d3');

        $this->assertCount(14, $roundsIds);
        $this->assertSame('98c04fb0-51fb-498c-a537-d8589adea74f', $roundsIds[0]);
        $this->assertSame('98c04fb2-3b82-4ba5-b669-14fa7fac248f', $roundsIds[13]);
    }

    public function test_pull_matches_from_round_id()
    {
        Http::fake([
            'https://gameshard.io/api/matches?filter%5Bround_id%5D=98c04fb2-3b82-4ba5-b669-14fa7fac248f' => Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/matches.json')), true), 200),
        ]);

        $gameshardApi = new GameshardApi();
        $matches = $gameshardApi->pullMatchesFromRoundId('98c04fb2-3b82-4ba5-b669-14fa7fac248f');

        $this->assertCount(4, $matches);
    }

    public function test_pull_matches_ids_from_round_id()
    {
        Http::fake([
            'https://gameshard.io/api/matches?filter%5Bround_id%5D=98c04fb2-3b82-4ba5-b669-14fa7fac248f' => Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/matches.json')), true), 200),
        ]);

        $gameshardApi = new GameshardApi();
        $matches = $gameshardApi->pullMatchesIdsFromRoundId('98c04fb2-3b82-4ba5-b669-14fa7fac248f');

        $this->assertCount(4, $matches);
        $this->assertSame('98c04fb2-3f0b-4422-93dd-e2dd98f964ec', $matches[0]);
        $this->assertSame('98c04fb2-46ab-40fb-8c84-0651fc651a51', $matches[1]);
        $this->assertSame('98c04fb2-4dcf-4328-90f6-d068df5b1d99', $matches[2]);
        $this->assertSame('98c04fb2-5628-4234-b332-968eddba4bc4', $matches[3]);
    }

    public function test_pull_games()
    {
        Http::fake([
            'https://gameshard.io/api/matches/98c04fb2-5628-4234-b332-968eddba4bc4/games' => Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/games.json')), true), 200),
        ]);

        $gameshardApi = new GameshardApi();
        $games = $gameshardApi->pullGames('98c04fb2-5628-4234-b332-968eddba4bc4');

        $this->assertCount(1, $games);
        $this->assertSame('98c04fb2-59a0-4d0e-a3e4-954da7eb05ba', $games[0]['id']);
        $this->assertSame('98c04fb2-5628-4234-b332-968eddba4bc4', $games[0]['match']['id']);
        $this->assertSame('9891968c-2922-40e2-8fc7-49866fdfd362', $games[0]['winner']['id']);
    }
}
