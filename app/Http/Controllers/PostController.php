<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
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
}
