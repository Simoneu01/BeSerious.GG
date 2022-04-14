<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class PressNews extends Component
{
    use WithPagination;

    public function render(): View
    {
        return view('livewire.press-news', [
            'articles' => Article::orderByDesc('created_at')->paginate(3),
        ])->layout('layouts.guest');
    }
}
