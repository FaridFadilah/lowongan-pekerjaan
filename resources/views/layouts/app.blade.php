<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body>
        @if(request()->path() != request()->is('auth/*'))
            <livewire:components.navbar/>
        @endif
        {{ $slot }}
        @livewireScripts
    </body>
</html>