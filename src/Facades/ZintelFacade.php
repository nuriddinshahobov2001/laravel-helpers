<?php

namespace Zintel\LaravelHelpers\Facades;

use Illuminate\Support\Facades\Facade;

class ZintelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'zintel';
    }
}
