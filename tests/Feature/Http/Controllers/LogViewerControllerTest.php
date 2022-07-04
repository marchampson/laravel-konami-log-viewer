<?php

use Marchampson\LaravelKonamiLogViewer\Http\Controllers\LogViewerController;

it('has a route to the log viewer', function () {
    $this
       ->get(action([LogViewerController::class, 'index']))
       ->assertOk()
       ->assertSee('laravel.log');
});
