<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        if ($this->command->confirm("Do you wish to refresh migration before seeding, it will clear all old data?")) {
            $this->command->call('migrate:fresh');
            $this->command->line("Database cleared");
        }

        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            // LecturersTableSeeder::class,
            // StudentsTableSeeder::class,
            // CoursesTableSeeder::class,
            // ClassroomsTableSeeder::class,
            // SchedulesTableSeeder::class
        ]);

        $this->command->info("Database seeded.");

        Eloquent::reguard();
    }
}
