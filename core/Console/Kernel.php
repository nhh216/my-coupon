<?php

namespace Core\Console\Commands;

use Core\Console\Commands\Update_DataBase;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Kernel as BaseKernel;

class Kernel extends BaseKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
      Update_DataBase::class,

    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
         $schedule->command('Update_DataBase:command')
                  ->everyMinute()->sendOutputTo('storage/log.txt');

//        $schedule->call(function (){
//
//        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
