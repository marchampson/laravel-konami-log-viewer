<?php

namespace Marchampson\LaravelKonamiLogViewer\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Marchampson\LaravelKonamiLogViewer\LaravelKonamiLogViewerServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Marchampson\\LaravelKonamiLogViewer\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelKonamiLogViewerServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-konami-log-viewer_table.php.stub';
        $migration->up();
        */
    }
}
