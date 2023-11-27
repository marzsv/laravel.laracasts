@props(['href', 'active' => false, 'label'])
<a href="{{ $href }}" class="block px-3 py-1 hover:bg-blue-500 hover:text-white">
    {{ $label }}
</a>
