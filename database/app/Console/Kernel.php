<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\SaveDataCommand;
use App\Http\Controllers\PublicController;
class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
   $schedule->call(function () {
            // Instantiate the controller
            $controller = app()->make(PublicController::class);
            
            // Call the method
            $controller->getDataAuto();
        })->everyMinute();
    }

    protected $commands = [
    Commands\FetchCricketData::class,
];

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
    
    }
}
