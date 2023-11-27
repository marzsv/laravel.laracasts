<x-layout>
    @include ('_header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())

        <!-- only display the featured post when not in a category page -->
        @if (!isset($currentCategory))
        <x-featured-post-card :post="$posts->first()" />
        @endif

        <div class="lg:grid lg:grid-cols-6">
            @foreach ($posts->skip(1) as $post)
            <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}" />
            @endforeach
        </div>
        @endif
    </main>
</x-layout>
