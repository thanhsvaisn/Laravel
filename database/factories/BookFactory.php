<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => $this->faker->numberBetween(1, 100), // Default author_id
            'title' => $this->faker->sentence(5), // Generate a random sentence for the title
            'isbn' => $this->faker->isbn13(), // Generate a random ISBN-13 number
            'pub_year' => $this->faker->numberBetween(1900, 2022), // Generate a random publication year between 1900 and 2022
            'available' => $this->faker->optional()->randomElement([null, 1]), // Default availability status to NULL
        ];
    }
}



