<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;
use \App\Models\User;
use \App\Models\Movie;


class ReviewFactory extends Factory
{
    protected $model = Review::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::inRandomOrder()->first()->id,
            'movie_id'=>Movie::inRandomOrder()->first()->id,
            'review' => $this->faker->realText(200,2),
            'created_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
