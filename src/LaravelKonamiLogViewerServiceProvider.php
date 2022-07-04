<?php

namespace Marchampson\LaravelKonamiLogViewer;

use Illuminate\Support\Facades\Route;
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
            ->hasViews()
            ->hasAssets();
    }

    public function packageRegistered()
    {
        Route::macro('konamiLogViewer', function () {
            Route::match(['GET', 'POST'], '/konami-log-viewer', [LogViewerController::class, 'index']);
        });
    }
}
