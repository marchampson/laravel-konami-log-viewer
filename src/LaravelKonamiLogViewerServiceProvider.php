<?php

namespace Marchampson\LaravelKonamiLogViewer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Marchampson\LaravelKonamiLogViewer\Commands\LaravelKonamiLogViewerCommand;

class LaravelKonamiLogViewerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-konami-log-viewer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-konami-log-viewer_table')
            ->hasCommand(LaravelKonamiLogViewerCommand::class);
    }
}
