<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Auth\Socialite\GameShardProvider;
use Filament\Filament;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'gameshard',
            function ($app) use ($socialite) {
                $config = $app['config']['services.gameshard'];
                return $socialite->buildProvider(GameShardProvider::class, $config);
            }
        );

        Str::macro('readDuration', function (...$text) {
            $totalWords = str_word_count(implode(" ", $text));
            $minutesToRead = round($totalWords / 200);

            return (int)max(1, $minutesToRead);
        });
    }
}
