<?php

namespace Peppe\RouteTranslator;

use Illuminate\Support\Facades\App;

class RouteTranslator
{
    /**
     * This function translate a route key using the lang file "routes.php" in the app project.
     *
     * @param string $routeKey Es. 'about'
     * @param string|null $locale
     * @return string
     */
  public function translateRoute(string $routeKey, ?string $locale = null): string
    {
        $locale = $locale ?: App::getLocale();
        

        return trans("routes.{$routeKey}", [], $locale);
    }
}
