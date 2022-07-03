<?php

namespace Marchampson\LaravelKonamiLogViewer\Commands;

use Illuminate\Console\Command;

class LaravelKonamiLogViewerCommand extends Command
{
    public $signature = 'laravel-konami-log-viewer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
