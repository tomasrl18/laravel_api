<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'slug' => $faker->slug,
                'description' => $faker->paragraph,
                'content' => $faker->text,
                'category_id' => $faker->numberBetween(1, 5),
                'posted' => $faker->randomElement(['yes', 'no'])
            ]);
        }
    }
}
