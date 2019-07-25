<?php

use App\Lecturer;
use App\User;
use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userCount = User::where('role_id', 1)->count();

        $this->command->info("Creating {$userCount} lecturers");
        
        $user = factory(Lecturer::class, $userCount)->create();

        $this->command->info("Lecturers created!");
    }
}
