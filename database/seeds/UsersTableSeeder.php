<?php

use App\User;
use App\Lecturer;
use App\Student;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userCount = (int) $this->command->ask("How many users?", 10);

        $this->command->info("Creating {$userCount} users");

        $user = factory(User::class, $userCount)->create();

        $this->command->info("Users created!");
    }
}
