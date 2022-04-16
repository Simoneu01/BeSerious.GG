<?php

namespace Tests\Feature\Models;

use App\Models\Player;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlayerTest extends TestCase
{
    use RefreshDatabase;

    public function test_img_url_attribute()
    {
        $player = Player::factory()->create(['img' => 'asd/asd']);

        $this->assertSame(url('/') . '/storage/asd/asd', $player->img_url);
    }

    public function test_full_name_attribute()
    {
        $player = Player::factory()->create(['name' => 'Simone', 'surname' => 'Ungaro', 'nickname' => 'Simo01']);

        $this->assertSame("Simone 'Simo01' Ungaro", $player->display_name);
    }
}
