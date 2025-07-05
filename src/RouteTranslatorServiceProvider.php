<?php
namespace Peppe\RouteTranslator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Lang;
use Peppe\RouteTranslator\Middleware\HandleRouteFallback;


class RouteTranslatorServiceProvider extends ServiceProvider
{

   public function boot()
    {
        $routeTranslator = new RouteTranslator();          
        Route::macro('trans', function ($key) use ($routeTranslator, ) {
            return $routeTranslator->translateRoute($key, );
        });

        $this->hanldeLangSwitch();             
    }

    private function handleLangSwitch() {
        Route::fallback(function () {
            $uri = request()->path();
            $currentLocale = app()->getLocale();
            $availableLocales = ['it', 'en'];
                
            foreach ($availableLocales as $locale) {
                if ($locale === $currentLocale) continue;
                    
                $translations = Lang::get('routes', [], $locale);
                $key = array_search($uri, $translations);

                if ($key) {
                    $translatedPath = Lang::get("routes.{$key}");
                    return redirect()->to("/$translatedPath", 301);
                }
            }

            abort(404); 
        });              
    }
}
