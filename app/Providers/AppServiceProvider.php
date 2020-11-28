<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// buat pagination
use Illuminate\Pagination\Paginator;


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
        //buat pagination
        Paginator::useBootstrap();
    }
}
