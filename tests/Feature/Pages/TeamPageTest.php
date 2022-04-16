<?php

namespace Tests\Feature\Pages;

use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeamPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_team_page_can_be_rendered()
    {
        $this->actingAs($user = User::factory()->create());

        $team = Team::factory()->create();

        $response = $this->get(route('team.show', $team));

        $response->assertStatus(200);
    }
}
