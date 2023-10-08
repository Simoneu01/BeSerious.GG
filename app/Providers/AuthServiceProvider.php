<?php

namespace App\Providers;

use App\Models\ConnectedAccount;
use App\Models\User;
use App\Policies\ConnectedAccountPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        ConnectedAccount::class => ConnectedAccountPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerPolicies();

        Gate::after(function (User $user) {
            return $user->hasRole('admin');
        });
    }
}
