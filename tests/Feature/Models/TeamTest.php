<?php

namespace Tests\Feature\Models;

use App\Models\Team;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TeamTest extends TestCase
{
    use RefreshDatabase;

    public function test_logo_url_attribute()
    {
        $team = Team::factory()->create(['logo' => 'asd/asd']);

        $this->assertSame(url('/') . '/storage/asd/asd', $team->logo_url);
    }
}
