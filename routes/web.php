<?php

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

Route::get('/', function () {
    return view('welcome', [
        'articles' => \App\Models\Article::orderByDesc('created_at')->take(3)->get(),
    ]);
})->name('welcome');

Route::get('/twitch', fn () => view('twitch'))->name('twitch');
Route::get('/campionato/2022', fn () => view('campionato'))->name('campionato.2022');
Route::get('/campionato/2021', fn () => view('be-serious'))->name('be-serious');

Route::get('/chi-siamo', function () {
    return view('chi-siamo', [
        'staffMembers' => \App\Models\Staff::all(),
    ]);
})->name('chi-siamo');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
