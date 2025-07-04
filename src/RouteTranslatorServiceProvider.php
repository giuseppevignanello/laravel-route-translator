<?php
namespace Peppe\RouteTranslator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;


class RouteTranslatorServiceProvider extends ServiceProvider
{

   public function boot()
    {

        $routeTranslator = new RouteTranslator();
               
        Route::macro('trans', function ($key) use ($routeTranslator, ) {
            return $routeTranslator->translateRoute($key, );
        });
                    
       
    }
}
