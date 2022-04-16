<?php

namespace Tests\Feature\Admin\Team;

use App\Filament\Resources\Teams\PlayerResource;
use App\Models\Player;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PlayerResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->admin()->create());
    }

    public function test_index_page_can_be_rendered()
    {
        $this->get(PlayerResource::getUrl())->assertSuccessful();
    }

    public function test_create_page_can_be_rendered()
    {
        $this->get(PlayerResource::getUrl('create'))->assertSuccessful();
    }

    public function test_edit_page_can_be_rendered()
    {
        $this->get(PlayerResource::getUrl('edit', [
            'record' => Player::factory()->create(),
        ]))->assertSuccessful();
    }
}
