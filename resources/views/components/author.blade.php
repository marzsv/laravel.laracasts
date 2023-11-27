@props(['author'])

<div class="flex items-center lg:justify-center text-sm mt-4">
    <img src="{{ asset('./images/lary-avatar.svg') }}" alt="Lary avatar">
    <div class="ml-3 text-left">
        <h5 class="font-bold">{{ $author }}</h5>
        <h6>Mascot at Laracasts</h6>
    </div>
</div>
