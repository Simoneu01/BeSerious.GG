<?php

namespace Tests\Feature\Admin\Team;

use App\Filament\Resources\Teams\TeamResource;
use App\Models\Player;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class TeamResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->admin()->create());
    }

    public function test_index_page_can_be_rendered()
    {
        $this->get(TeamResource::getUrl())->assertSuccessful();
    }

    public function test_create_page_can_be_rendered()
    {
        $this->get(TeamResource::getUrl('create'))->assertSuccessful();
    }

    public function test_edit_page_can_be_rendered()
    {
        $this->get(TeamResource::getUrl('edit', [
            'record' => Team::factory()->create(),
        ]))->assertSuccessful();
    }

    public function test_can_render_relation_manager()
    {

        $team = Team::factory()
            ->has(Player::factory()->count(10))
            ->create();

        Livewire::test(TeamResource\RelationManagers\PlayersRelationManager::class, [
            'ownerRecord' => $team,
            'pageClass' => TeamResource\Pages\EditTeam::class,
        ])
            ->assertSuccessful();
    }
}
