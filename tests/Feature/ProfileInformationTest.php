<?php

namespace Tests\Feature;

use App\Http\Livewire\Profile\UpdateProfile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileInformationTest extends TestCase
{
    use RefreshDatabase;

    public function test_current_profile_information_is_available()
    {
        $this->actingAs($user = User::factory()->create());

        $component = Livewire::test(UpdateProfile::class);

        $this->assertEquals($user->name, $component->state['name']);
        $this->assertEquals($user->email, $component->state['email']);
    }

    public function test_profile_information_can_be_updated()
    {
        $this->actingAs($user = User::factory()->create());

        Livewire::test(UpdateProfile::class)
                ->set('state', ['name' => 'Test Name', 'email' => 'test@example.com'])
                ->call('updateProfileInformation');

        $this->assertEquals('Test Name', $user->fresh()->name);
        $this->assertEquals('test@example.com', $user->fresh()->email);
    }

    public function test_about_can_be_updated()
    {
        $this->actingAs($user = User::factory()->create());

        $this->assertNull($user->about);

        Livewire::test(UpdateProfile::class)
            ->set('state', ['name' => 'Test Name', 'email' => 'test@example.com', 'about' => 'Test About'])
            ->call('updateProfileInformation');

        $this->assertEquals('Test Name', $user->fresh()->name);
        $this->assertEquals('test@example.com', $user->fresh()->email);
        $this->assertEquals('Test About', $user->fresh()->about);
    }

    public function test_username_can_be_updated()
    {
        $this->actingAs($user = User::factory()->create());

        $this->assertNull($user->about);

        Livewire::test(UpdateProfile::class)
            ->set('state', ['name' => 'Test Name', 'email' => 'test@example.com', 'username' => 'Test Username'])
            ->call('updateProfileInformation');

        $this->assertEquals('Test Name', $user->fresh()->name);
        $this->assertEquals('test@example.com', $user->fresh()->email);
        $this->assertEquals('Test Username', $user->fresh()->username);
    }
}
