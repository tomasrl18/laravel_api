<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'title' => 'Books',
            'slug' => 'books',
        ]);

        Category::create([
            'title' => 'Travel',
            'slug' => 'travel',
        ]);

        Category::create([
            'title' => 'Technology',
            'slug' => 'technology',
        ]);

        Category::create([
            'title' => 'Lifestyle',
            'slug' => 'lifestyle',
        ]);

        Category::create([
            'title' => 'Health & Wellness',
            'slug' => 'health_wellness',
        ]);
    }
}
