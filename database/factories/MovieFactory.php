<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'       => fake()->text(5),
            'description' => fake()->text(200),
            'rate'        => fake()->numberBetween(1,5),
            'image'       => fake()->imageUrl(640,480),
        ];
    }
}
