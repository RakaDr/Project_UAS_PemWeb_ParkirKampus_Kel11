<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate; // <-- PASTIKAN INI ADA
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // TAMBAHKAN KODE INI
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super_Admin') ? true : null;
        });
    }
}