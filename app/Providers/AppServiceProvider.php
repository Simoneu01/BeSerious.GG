<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Auth\Socialite\GameShardProvider;

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
    }
}
