<?php

namespace Satyapraneel\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Satyapraneel\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Satyapraneel\Example\Example::class;
    }
}
