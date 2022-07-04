<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Testing\File;
use Marchampson\LaravelKonamiLogViewer\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Storage::fake('logs');
        $file = File::create('laravel.log');
        Storage::disk('logs')->put('laravel.log', file_get_contents($file));
        Route::konamiLogViewer();
    })
    ->in(__DIR__);
