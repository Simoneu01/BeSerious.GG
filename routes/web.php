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
Route::get('/campionato', fn () => view('campionato', ['teams' => \App\Models\Team::all()]))->name('campionato.2022');
Route::get('/campionato/{year?}', \App\Http\Livewire\Rankings::class)->name('be-serious');
Route::get('/teams/{team}', [ TeamController::class, 'show' ])->name('team.show');
Route::get('/chi-siamo', fn () => view('chi-siamo', ['staffMembers' =>  \App\Models\Staff::all()]))->name('chi-siamo');
Route::get('/press', PressNews::class)->name('press');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user/profile', \App\Http\Livewire\Profile\UpdateProfile::class)->name('profile.show');
    Route::middleware([\App\Http\Middleware\HavePasswordMiddleware::class])->get('/user/profile/password', \App\Http\Livewire\Profile\UpdatePassword::class)->name('profile.password');
    Route::middleware([\App\Http\Middleware\PasswordMiddleware::class])->get('/user/profile/new-password', \App\Http\Livewire\Profile\SetPassword::class)->name('profile.new-password');
    Route::get('/user/profile/2fa', \App\Http\Livewire\Profile\TwoFactor::class)->name('profile.2fa');
    Route::get('/user/profile/account', \App\Http\Livewire\Profile\Account::class)->name('profile.account');
    Route::get('/predictions', fn () => view('predictions'))->name('predictions');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
