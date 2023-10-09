<?php

namespace Tests\Feature\Pages;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_cannot_be_accessed_by_guest()
    {
        $this
            ->get(route('dashboard'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }

    public function test_dashboard_can_be_accessed()
    {
        $this->actingAs(User::factory()->create());

        $this
            ->get(route('dashboard'))
            ->assertStatus(200)
            ->assertSuccessful();
    }
}
