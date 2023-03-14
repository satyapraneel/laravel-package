<?php

namespace Satyapraneel\Example;

use Satyapraneel\Example\Commands\ExampleCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package_table')
            ->hasCommand(ExampleCommand::class);
    }
}
