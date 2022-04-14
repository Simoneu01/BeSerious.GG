<?php

namespace Tests\Feature\Admin;

use App\Filament\Resources\ArticleResource;
use App\Filament\Resources\StaffResource;
use App\Models\Article;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaffResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->admin()->create());
    }

    public function test_index_page_can_be_rendered()
    {
        $this->get(StaffResource::getUrl())->assertSuccessful();
    }

    public function test_create_page_can_be_rendered()
    {
        $this->get(StaffResource::getUrl('create'))->assertSuccessful();
    }

    public function test_edit_page_can_be_rendered()
    {
        $this->get(StaffResource::getUrl('edit', [
            'record' => Staff::factory()->create(),
        ]))->assertSuccessful();
    }
}
