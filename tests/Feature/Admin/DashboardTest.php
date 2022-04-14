<?php

namespace Admin;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_dashboard_can_be_rendered()
    {
        $this->actingAs(User::factory()->admin()->create());

        $response = $this->get(route('filament.pages.dashboard'));

        $response->assertSuccessful();
    }

    public function test_admin_dashboard_cannot_be_accessed_by_guest()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(route('filament.pages.dashboard'));

        $response->assertForbidden();
    }
}
