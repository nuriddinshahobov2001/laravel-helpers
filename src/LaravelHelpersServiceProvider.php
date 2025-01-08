<?php

namespace Zintel\LaravelHelpers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Zintel\LaravelHelpers\Helpers\ZintelDate;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('zintelDate', function () {
            return new ZintelDate();
        });

        $this->app->singleton('zintelString', function () {
            return new ZintelDate();
        });

        $this->app->singleton('zintelArray', function () {
            return new ZintelDate();
        });
    }

    public function boot()
    {
        // TODO
    }
}
