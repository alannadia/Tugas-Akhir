<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;    // Must Must use
use Illuminate\Support\Facades\Blade;   // Must Must use

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
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->role == "admin";
        });
        Blade::if('walikelas', function () {
            return auth()->check() && auth()->user()->role == "walikelas";
        });
        Blade::if('siswa', function () {
            return auth()->check() && auth()->user()->role == "siswa";
        });

    }
}
