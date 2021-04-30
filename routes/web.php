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

Route::get('/', fn () => view('welcome'))->name('welcome');
Route::get('/chi-siamo', fn () => view('chi-siamo'))->name('chi-siamo');
Route::get('/twitch', fn () => view('twitch'))->name('twitch');
Route::get('/be-serious', fn () => view('be-serious'))->name('be-serious');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
