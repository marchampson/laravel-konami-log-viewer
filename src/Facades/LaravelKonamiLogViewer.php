<?php

namespace Marchampson\LaravelKonamiLogViewer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marchampson\LaravelKonamiLogViewer\LaravelKonamiLogViewer
 */
class LaravelKonamiLogViewer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-konami-log-viewer';
    }
}
