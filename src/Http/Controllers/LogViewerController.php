<?php

namespace Marchampson\LaravelKonamiLogViewer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LogViewerController
{
    public function index(Request $request)
    {
        $selectedFile = $request->get('file') ?: 'laravel.log';

        if ($selectedFile === 'laravel.log' && ! file_exists(storage_path('logs/laravel.log'))) {
            Log::info('Hello, world');
        }
        $files = [];

        if (is_dir(storage_path())) {
            $files = array_reverse(glob(storage_path('logs/*.log')));
        }

        return view(
            'konami-log-viewer::log-viewer',
            compact('selectedFile', 'files')
        );
    }
}
