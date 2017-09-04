<?php

namespace Yansongda\LaravelParsedown\Facades;

use Illuminate\Support\Facades\Facade;

class Parsedown extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'parsedown';
    }
}
