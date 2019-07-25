<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseCount = (int) $this->command->ask("How many course?", 10);

        $this->command->info("Creating {$courseCount} courses");
        
        $course = factory(Course::class, $courseCount)->create();

        $this->command->info("Courses created!");
    }
}
