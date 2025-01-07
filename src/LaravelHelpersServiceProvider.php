<?php

namespace Zintel\LaravelHelpers;

use Illuminate\Support\ServiceProvider;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Регистрируем класс Zintel как сервис в контейнере
        $this->app->singleton('zintel', function () {
            return new Zintel();
        });
    }

    public function boot()
    {
        // Логика загрузки пакета, если нужно
    }
}
