<?php

namespace Marchampson\LaravelKonamiLogViewer;

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use Marchampson\LaravelKonamiLogViewer\Http\Controllers\LogViewerController;
=======
use Marchampson\LaravelKonamiLogViewer\Commands\LaravelKonamiLogViewerCommand;
>>>>>>> 6161990517e9395328c3d058a9797dd08a7d87fa
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
