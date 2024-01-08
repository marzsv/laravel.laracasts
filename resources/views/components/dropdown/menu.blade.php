@props(['items', 'selected-item'])
<div x-data="{ show: false }" class="relative bg-gray-100 rounded-xl">
    <div class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left lg:flex lg:inline-flex">
        @if(isset($selectedItem))
        <button @click=" show=! show" @click.away="show = false">{{ $selectedItem }}</button>
        @else
        <button @click=" show=! show" @click.away="show = false" class="">Categories</button>
        @endif


        <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22" height="22" viewBox="0 0 22 22">
            <g fill="none" fill-rule="evenodd">
                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                </path>
                <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
            </g>
        </svg>
    </div>

    <div x-show="show" class="absolute bg-gray-100 rounded-xl sm:w-full">
        <x-dropdown.link :href="route('post.index')" :label="__('All')"></x-dropdown-link>

        @foreach ($items as $item)
        <x-dropdown.link
            :href="route('post.category', [$item])"
            :label="$item->name"
            :active="request()->is('category/' . $item->slug)">
        </x-dropdown-link>
        @endforeach
    </div>
</div>
