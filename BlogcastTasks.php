<?php

namespace Statamic\Addons\Blogcast;

use Statamic\Extend\Tasks;
use Illuminate\Console\Scheduling\Schedule;

class BlogcastTasks extends Tasks
{
    /**
     * Define the task schedule
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command('cache:clear')->weekly();
    }
}
