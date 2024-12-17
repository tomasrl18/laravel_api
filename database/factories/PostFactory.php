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
        $name = $this->faker->name();
        return [
            'title' => $name,
            'slug' => str($name)->slug('_'),
            'content' => $this->faker->text,
            'description' => $this->faker->paragraph,
            'category_id' => $this->faker->numberBetween(1, 5),
            'posted' => $this->faker->randomElement(['yes', 'no']),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
