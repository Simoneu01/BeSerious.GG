<?php

use App\Http\Controllers\TeamController;
use App\Livewire\PressNews;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => view('welcome', ['articles' => \App\Models\Article::orderByDesc('created_at')->take(3)->get()]))->name('welcome');
Route::get('/twitch', fn () => view('twitch'))->name('twitch');
Route::get('/campionato', fn () => view('campionato', ['teams' => \App\Models\Team::all()]))->name('campionato-corrente');
Route::get('/campionato/{year?}', \App\Livewire\Rankings::class)->name('campionato-anno');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('team.show');
Route::get('/chi-siamo', fn () => view('chi-siamo', ['staffMembers' => \App\Models\Staff::all()]))->name('chi-siamo');
Route::get('/press', PressNews::class)->name('press');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
