<x-mail::message>
# Hey {{ $user->name }},

Welcome to our website!

<x-mail::button :url="'http://www.google.com'">
Go to Google
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
