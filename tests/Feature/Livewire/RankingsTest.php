<?php

namespace Feature\Livewire;

use App\Livewire\PressNews;
use App\Livewire\Rankings;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Livewire\Livewire;
use Tests\TestCase;
use Illuminate\Http\Client\Request;

class RankingsTest extends TestCase
{
    use RefreshDatabase;


    public function test_render()
    {
        Http::fake([
            'https://gameshard.io/api/tournaments*' =>  Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/rounds.json')), true), 200),
            'https://gameshard.io/api/matches?filter*' =>  Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/matches.json')), true), 200),
            'https://gameshard.io/api/matches/*' =>  Http::response(json_decode(file_get_contents(base_path('tests/Fixtures/games.json')), true), 200),
        ]);

        Livewire::test(Rankings::class)
            ->assertSuccessful();
    }
}
