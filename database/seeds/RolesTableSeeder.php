<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturer = new Role;
        $lecturer->role_name = "Lecturer";
        $lecturer->save();

        $student = new Role;
        $student->role_name = "Student";
        $student->save();
    }
}
