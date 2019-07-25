<?php

use App\Student;
use App\User;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userCount = User::whereHas('role', function($q) {
            $q->where('role_id', 2);
        })->count();

        $this->command->info("Creating {$userCount} students");

        $user = factory(Student::class, $userCount)->create();

        $this->command->info("Students created!");
    }
}
