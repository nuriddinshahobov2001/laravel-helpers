<?php

namespace Zintel\LaravelHelpers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Zintel\LaravelHelpers\Helpers\Zintel;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрируем класс Zintel как сервис в контейнере
        $this->app->singleton('zintel', function () {
            return new Zintel();
        });

        // Регистрируем макросы для строк
        Str::macro('toLowerCase', function ($string) {
            return (new \Illuminate\Support\Stringable($string))->lower();
        });

        Str::macro('toUpperCase', function ($string) {
            return (new \Illuminate\Support\Stringable($string))->upper();
        });
    }

    public function boot()
    {
        // Логика загрузки пакета, если нужно
    }
}
