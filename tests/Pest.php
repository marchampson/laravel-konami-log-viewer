<?php

use Illuminate\Support\Facades\Route;
use Marchampson\LaravelKonamiLogViewer\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function () {
        Route::konamiLogViewer();
    })
    ->in(__DIR__);
