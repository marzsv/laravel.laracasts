<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        <x-author-and-category :post="$post"></x-author-and-category>

        <p>{{ $post->body }}</p>
    </article>

    <a href="{{ route('post.index') }}">Go back</a>
</x-layout>
