<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Backup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup DB using plain old PHP';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->backup();
    }

    protected function backup()
    {
        $mysql = new \mysqli(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));
        if (! $mysql) $this->warn("Could not connect");

        if (
            $mysql->query('BACKUP DATABASE databasename TO DISK = ' . storage_path('/app/backup/yes.sql'))
        ) {
            $this->success('Done');
        } else {
            $this->error('Not Done');
        }
    }
}
