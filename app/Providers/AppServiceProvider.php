<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

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
        // Gate::define('isAdmin', function(User $user) {
        //     return $user->is_admin == 1;
        // });
        //  /* define a manager user role */
        //          Gate::define('isModerator', function(User $user) {
        //              return $user->is_moderator == 1;
        //          });
               
        //          /* define a user role */
        //          Gate::define('isUser', function(User $user) {
        //              return $user->is_user == 1;
        //          });
    }
}
