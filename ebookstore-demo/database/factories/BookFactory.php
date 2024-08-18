<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 0, 100),
            'published_at' => $this->faker->date(),
            'cover_image' => $this->faker->imageUrl(),
            'status' => $this->faker->randomElement(['bestseller', 'clearance', 'new_release', 'sale']),
        ];
    }
}
