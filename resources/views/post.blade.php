<!DOCTYPE html>

<link rel="stylesheet" href="/styles.css">

<article>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</article>

<a href="{{ route('post.index') }}">Go back</a>
