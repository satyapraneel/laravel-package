<?php

namespace Satyapraneel\LaravelPackage\Commands;

use Illuminate\Console\Command;

class LaravelPackageCommand extends Command
{
    public $signature = 'laravel-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
