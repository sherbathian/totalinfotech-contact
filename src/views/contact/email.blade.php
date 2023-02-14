<x-mail::message>
    # Introduction

    This is message from -----
    {{$message}}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>