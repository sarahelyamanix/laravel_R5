<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CitySeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(StudentsCoursesSeeder::class);  // Ensure the correct class name is used
    }
}
