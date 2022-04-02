<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\TestDataSeeder;
use Database\Seeders\ReviewSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(MovieSeeder::class);
        $this->call(TestDataSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
