<?php

namespace TomasRutar\WebruBackend;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Route;

class WebruBackendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views/backend', 'backend');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');


//        $this->publishes([
//            __DIR__.'/views/backend' => resource_path('views/backend'),
//        ]);
    }
}