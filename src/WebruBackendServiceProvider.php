<?php

namespace TomasRutar\WebruBackend;

use Illuminate\Support\ServiceProvider;

class WebruBackendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'WebruBackendViews');

        $this->publishes([
            __DIR__.'/public' => public_path('/'),
        ], 'publicBackend');
    }
}