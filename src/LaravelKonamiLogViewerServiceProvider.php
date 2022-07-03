<?php

namespace Marchampson\LaravelKonamiLogViewer;

use Illuminate\Support\Facades\Route;
use Marchampson\LaravelKonamiLogViewer\Commands\LaravelKonamiLogViewerCommand;
use Marchampson\LaravelKonamiLogViewer\Http\Controllers\LogViewerController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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

    public function packageRegistered()
    {
        Route::macro('konamiLogViewer', function (string $baseUrl = 'konami-log-viewer') {
            Route::prefix($baseUrl)->group(function () {
                Route::match(['GET', 'POST'], '/', [LogViewerController::class, 'index']);
            });
        });
    }
}
