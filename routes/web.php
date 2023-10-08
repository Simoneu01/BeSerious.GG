<?php

use App\Http\Controllers\TeamController;
use App\Http\Livewire\PressNews;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => view('welcome', ['articles' => \App\Models\Article::orderByDesc('created_at')->take(3)->get()]))->name('welcome');
Route::get('/twitch', fn () => view('twitch'))->name('twitch');
Route::get('/campionato/2022', fn () => view('campionato', ['teams' => \App\Models\Team::all()]))->name('campionato.2022');
Route::get('/campionato/2021', fn () => view('be-serious'))->name('be-serious');
Route::get('/teams/{team}', [TeamController::class, 'show'])->name('team.show');
Route::get('/chi-siamo', fn () => view('chi-siamo', ['staffMembers' => \App\Models\Staff::all()]))->name('chi-siamo');
Route::get('/press', PressNews::class)->name('press');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
