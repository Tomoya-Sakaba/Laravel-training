<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\User;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
	public function definition()
    {
        return [
            'title' => fake()->sentence(1),
			'body' => fake()->realText(30),
			'created_at' => fake()->date($format = 'Y-m-d' , $max = 'now'),
			'user_id' => fake()->numberBetween(1,15),
        ];
    }
}
