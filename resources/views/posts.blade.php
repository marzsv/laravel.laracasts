<x-layout>
    <h1>Posts</h1>

    @foreach ($posts as $post)
    <article>
        <h1>
            <a href="{{ route('post.show', ['post' => $post]) }}">{{ $post->title }}</a>
        </h1>
        <p>{{ $post->body }}</p>
    </article>
    @endforeach
</x-layout>
