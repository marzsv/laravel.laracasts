<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $authors = User::all();

        Category::all()->each(function (Category $category) use ($authors) {
            $category->posts()->saveMany(
                Post::factory()->count(rand(2, 7))->make([
                    'author_id' => $authors->random()->id,
                ])
            );
        });
    }
}
