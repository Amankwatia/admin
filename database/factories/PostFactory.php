<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'index_num' => $this->faker->numberBetween(1000000000, 9999999999),
            'surname' => $this->faker->lastName(),
            'Other_Names' => $this->faker->firstName(),
            'residence' => 'Boarding',
        ];
    }
}
