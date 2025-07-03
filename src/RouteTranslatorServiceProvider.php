<?php

namespace Peppe\RouteTranslator;

use Illuminate\Support\ServiceProvider;

class RouteTranslatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(RouteTranslator::class, function ($app) {
            return new RouteTranslator();
        });
    }

    public function boot()
    {
       
    }
}
