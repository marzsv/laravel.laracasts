<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'author')->latest()->get();
        $categories = Category::all();

        return view('posts', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $post = cache()->remember(
            "posts.{$slug}",
            now()->addDay(),
            fn () => Post::whereSlug($slug)->firstOrFail()
        );

        return view('post', compact('post'));
    }

    public function category(Category $category)
    {
        $posts = $category->posts()->with('category', 'author')->latest()->get();
        $categories = Category::all();
        $currentCategory = $category;


        return view('posts', compact('posts', 'categories', 'currentCategory'));
    }

    public function author(User $author)
    {
        $posts = $author->posts()->with('category', 'author')->latest()->get();
        return view('posts', compact('posts'));
    }
}
