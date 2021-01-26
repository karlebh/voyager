<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Process\Exception\ProcessFailedException;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup database to a file';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $process;

    public function __construct()
    {
        parent::__construct();

        $today = 'backup-' . today()->format('Y-m-d') . '-';
        if (! is_dir(storage_path('backup'))) mkdir(storage_path('backup'));

        $this->process = new Process([sprintf(
            'mysqldump --compact --skip-comments -u%s -p%s %s > %s',
            config('database.connections.mysql.username'),
            config('database.connections.mysql.password'),
            config('database.connections.mysql.database'),
            storage_path('backup'. $today . '.bak')
        )]);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $this->process->mustRun();
    }


}
