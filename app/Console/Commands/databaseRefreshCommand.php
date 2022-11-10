<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class databaseRefreshCommand extends Command
{

    protected $signature = 'db:refresh';

    protected $description = 'This command is usefull to refresh all database and seeder the default data';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->call('migrate:refresh');
        $this->call('db:seed');
        $this->info('command has been ran');
    }
}
