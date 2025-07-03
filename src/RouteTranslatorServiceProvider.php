<?php
namespace Peppe\RouteTranslator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;


class RouteTranslatorServiceProvider extends ServiceProvider
{

   public function boot()
    {
        $router = $this->app->make(Router::class);

        Route::macro('localized', function (callable $callback) {
            $routeTranslator = new RouteTranslator();
            
               Route::group([], function () use ($callback, $routeTranslator, ) {
                    Route::macro('trans', function ($key) use ($routeTranslator, ) {
                        return $routeTranslator->translateRoute($key, );
                    });
                    $callback();
                });
        });
    }
}
