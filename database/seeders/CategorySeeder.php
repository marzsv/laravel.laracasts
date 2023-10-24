<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Entertainment',
            'Food',
            'Health',
            'Lifestyle',
            'Music',
            'News',
            'Politics',
            'Sports',
            'Technology',
            'Travel',
        ];

        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => \Illuminate\Support\Str::slug($category),
            ]);
        }
    }
}
