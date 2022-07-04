<?php

namespace Marchampson\LaravelKonamiLogViewer\Http\Controllers;

use Illuminate\Http\Request;

class LogViewerController
{
    public function index(Request $request)
    {
        $key_combination = config('konami-log-viewer.launch_key_combination');
        $selectedFile = $request->get('file') ?: 'laravel.log';
        $files = array_reverse(glob(storage_path('logs/*.log')));

        return view(
            'konami-log-viewer::log-viewer',
            compact('selectedFile', 'files', 'key_combination')
        );
    }
}
