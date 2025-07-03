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
