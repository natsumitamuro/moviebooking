<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ReviewFactory;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = \App\Models\Review::factory()->count(10)->create(); 
    }
}
