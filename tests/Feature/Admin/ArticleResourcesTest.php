<?php

namespace Tests\Feature\Admin;

use App\Filament\Resources\ArticleResource;
use App\Models\Article;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ArticleResourcesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->admin()->create());
    }

    public function test_index_page_can_be_rendered()
    {
        $this->get(ArticleResource::getUrl())->assertSuccessful();
    }

    public function test_create_page_can_be_rendered()
    {
        $this->get(ArticleResource::getUrl('create'))->assertSuccessful();
    }

    public function test_edit_page_can_be_rendered()
    {
        $this->get(ArticleResource::getUrl('edit', [
            'record' => Article::factory()->create(),
        ]))->assertSuccessful();
    }
}
