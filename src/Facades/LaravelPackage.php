<?php

namespace Satyapraneel\LaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Satyapraneel\LaravelPackage\LaravelPackage
 */
class LaravelPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Satyapraneel\LaravelPackage\LaravelPackage::class;
    }
}
