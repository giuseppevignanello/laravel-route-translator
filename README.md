# Laravel Route Translator

A simple Laravel package to translate route URLs using the project's own language files.

## Overview

This package allows you to translate route paths based on language files located in your Laravel application's `resources/lang/{locale}/routes.php`. It **does not** include any translations itself, so you can fully customize your route translations within your project.

## Features

- Translate route URLs dynamically according to the current locale.
- Compatible with Laravel 10, 11, and 12.
- Lightweight and minimal — no bundled translations or views.
- Easily extendable.

## Installation

Require the package via Composer:

```bash
composer require peppe/laravel-route-translator
```


## Usage
Add your route translation in a ```bash route.php ``` in your ```bash lang/{{locale}} ``` . Later you only have to use the trans macro on your route file like this: 

```bash
 Route::get(Route::trans('about'), function () {
        return __('About Us page');
    })->name('about');

    Route::get(Route::trans('contact'), function () {
        return __('Contact page');
    })->name('contact');
```
