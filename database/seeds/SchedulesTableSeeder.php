<?php

use App\Schedule;
use App\Student;
use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = new Schedule;
        $schedule->course_id = 1;
        $schedule->class_id = 1;
        $schedule->lecturer_id = 1;
        $schedule->day = 'Monday';
        $schedule->date = now();
        $schedule->time_start = '07:30:00';
        $schedule->time_end = '10:00:00';
        $schedule->save();
    }
}
