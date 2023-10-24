<h2>
    By <a href="{{ route('post.author', ['author' => $post->author]) }}">{{ $post->author->name }}</a>
    in <a href="{{ route('post.category', ['category' => $post->category]) }}">{{ $post->category }}</a>
</h2>
