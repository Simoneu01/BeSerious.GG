<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\PressNews;
use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class PressNewsTest extends TestCase
{
    use RefreshDatabase;

    public function test_render()
    {
        Article::factory(10)->create();

        Livewire::test(PressNews::class)
            ->assertSuccessful();
    }
}
