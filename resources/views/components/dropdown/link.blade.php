@props(['href', 'active' => false, 'label'])

@if ($active)
<a
    href="{{ $href }}"
    class="block px-3 py-1 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white bg-blue-500 text-white">
        {{ $label }}
</a>
@else
<a
    href="{{ $href }}"
    class="block px-3 py-1 hover:bg-blue-500 hover:text-white focus:bg-blue-500 focus:text-white">
        {{ $label }}
</a>
@endif
