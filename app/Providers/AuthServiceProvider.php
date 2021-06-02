<?php

namespace App\Providers;

use App\Models\Permation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permations = Permation::with('roles')->get();

        foreach ($permations as $permation) {

            Gate::define($permation->name, function ($user) use ($permation) {

                return $user->hasPermationTo($permation->roles);
            });
        }

        Gate::before(function ($user, $ability) {
            if ($user->hasPermationTo('admin')) {
                return true;
            }
        });
    }
}
