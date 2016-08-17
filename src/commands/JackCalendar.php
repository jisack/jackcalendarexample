<?php

namespace Jacklaravel\Calendar\Commands;

use Illuminate\Console\Command;

class JackCalendar extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jack:calendar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run to install database for Calendar Data';

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
     * @return mixed
     */
    public function handle()
    {
        $this->info('begin installation Calendar');
        $this->info('running migrate calendar table...');
        $this->runMigrate();
        $this->info('copying initial files...');
        $this->runPublishVendor();
        $this->info('installation successful');
    }

    public function runMigrate(){
            copy(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'migrations' . DIRECTORY_SEPARATOR . '2016_06_28_083316_create_calendars_table.php',
                database_path('migrations' . DIRECTORY_SEPARATOR . '2016_06_28_083316_create_calendars_table.php'));
            $this->call('migrate');
            $this->info('migration successfully');
    }

    public function runPublishVendor(){
            $this->call("vendor:publish");
    }
}
