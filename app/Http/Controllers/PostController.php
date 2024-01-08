<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\Container\BindingResolutionException;

use function Psy\debug;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'author')
            ->latest()
            ->get();

        return view('posts', [
            'posts' => $posts,
            'categories' => Category::all(),
        ]);
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

    /**
     * Posts by category

     * @return View|Factory
     * @throws BindingResolutionException
     */
    public function category(Category $category)
    {
        $posts = $category->posts()
            ->with('category', 'author')
            ->latest()
            ->get();

        return view('posts', [
            'posts' => $posts,
            'categories' => Category::all(),
            'currentCategory' => $category,
        ]);
    }

    public function author(User $author)
    {
        $posts = $author->posts()->with('category', 'author')->latest()->get();
        return view('posts', compact('posts'));
    }
}
