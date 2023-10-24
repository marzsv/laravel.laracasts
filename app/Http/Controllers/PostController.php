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
        return view('posts', compact('posts'));
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
        return view('posts', compact('posts'));
    }

    public function author(User $author)
    {
        $posts = $author->posts()->with('category', 'author')->latest()->get();
        return view('posts', compact('posts'));
    }
}
