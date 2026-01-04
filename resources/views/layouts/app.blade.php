<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Mimi') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-gray-100 dark:bg-gray-900">
        {{-- Main Content --}}
        <main class="nativephp-safe-area">
            {{ $slot }}
        </main>

        {{-- Native Bottom Navigation --}}
        <native:bottom-nav>
            <native:bottom-nav-item
                id="home"
                icon="house.fill"
                label="Home"
                url="/"
                :active="request()->is('/')"
            />
            <native:bottom-nav-item
                id="explore"
                icon="magnifyingglass"
                label="Explore"
                url="/explore"
                :active="request()->is('explore*')"
            />
            <native:bottom-nav-item
                id="settings"
                icon="gearshape.fill"
                label="Settings"
                url="/settings"
                :active="request()->is('settings*')"
            />
        </native:bottom-nav>
    </body>
</html>
