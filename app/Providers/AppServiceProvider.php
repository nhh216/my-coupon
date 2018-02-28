<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(255);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Chỉu load debugbar trên local host
        if (config('app.env') == 'local') {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
