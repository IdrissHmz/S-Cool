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
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(MarkSeeder::class);
        $this->call(AlertSeeder::class);
        $this->call(DemandSeeder::class);
        $this->call(SessionSeeder::class);
    }
}
