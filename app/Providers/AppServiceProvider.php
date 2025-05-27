<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Gate::define("view-srudent", function (User $user){
            if ($user->role === "admin" || $user->role === "guest"){
                return true;
            }
            return false;
        });
        Gate::define("store-student", function (User $user){
            if($user->role === "admin") {
                return true;
            }
            return false;
        });
        Gate::define("edite-student", function (User $user){
            if($user->role === "admin") {
                return true;
            }
            return false;
        });
        Gate::define("delete-student", function (User $user){
            if($user->role === "admin") {
                return true;
            }
            return false;
        });
    }
}
