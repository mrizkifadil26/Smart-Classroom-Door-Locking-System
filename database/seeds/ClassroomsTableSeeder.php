<?php

use App\Classroom;
use Illuminate\Database\Seeder;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classCount = (int) $this->command->ask("How many classroom?", 10);

        $this->command->info("Creating {$classCount} classrooms");
        
        $class = factory(Classroom::class, $classCount)->create();

        $this->command->info("Classrooms created!");
    }
}
