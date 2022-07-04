<?php

namespace Marchampson\LaravelKonamiLogViewer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LogViewerController
{
    public function index(Request $request)
    {
        $key_combination = config('konami-log-viewer.launch_key_combination');
        $file = $request->get('file') ?: 'laravel.log';
        $selectedFile = null;
        $files = [];
        if (is_dir(storage_path())) {
            $files = array_reverse(glob(storage_path('logs/*.log')));
            $selectedFile = File::get(storage_path('logs/' . $file));
        }

        return view(
            'konami-log-viewer::log-viewer',
            compact('selectedFile', 'files', 'key_combination')
        );
    }
}
