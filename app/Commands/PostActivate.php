<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class PostActivate extends Command
{
    /**
     * The signature of the command.
     * @var string
     */
    protected $signature = 'post:activate {release}';

    /**
     * The description of the command.
     * @var string
     */
    protected $description = 'Pre Clone New Release';

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle()
    {
        //
    }

    /**
     * Define the command's schedule.
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    public function schedule(Schedule $schedule): void
    {
        // $schedule->command(static::class)->everyMinute();
    }
}
