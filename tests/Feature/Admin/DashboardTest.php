<?php

namespace Tests\Feature\Admin;

use App\Models\User;
use Filament\Pages\Dashboard;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_dashboard_can_be_rendered()
    {
        $this->actingAs(User::factory()->admin()->create());

        $response = $this->get(Dashboard::getUrl());

        $response->assertSuccessful();
    }

    public function test_admin_dashboard_can_be_accessed_by_guest_in_local_env()
    {
        $this->app->detectEnvironment(function () {
            return 'local';
        });

        $this->assertEquals('local', app()->environment());

        $this->actingAs(User::factory()->create());

        $response = $this->get(Dashboard::getUrl());

        $response->assertSuccessful();
    }

    public function test_admin_dashboard_cannot_be_accessed_by_guest()
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get(Dashboard::getUrl());

        $response->assertForbidden();
    }
}
