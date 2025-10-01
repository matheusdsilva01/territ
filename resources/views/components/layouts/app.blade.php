<?php

declare(strict_types=1);

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Reddit-like Home • Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Cal+Sans&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @filamentStyles
        {{ filament()->getTheme()->getHtml() }}
        @if (! filament()->hasDarkMode())
            <script>
                localStorage.setItem('theme', 'light');
            </script>
        @elseif (filament()->hasDarkModeForced())
            <script>
                localStorage.setItem('theme', 'dark');
            </script>
        @else
            <script>
                const loadDarkMode = () => {
                    window.theme = localStorage.getItem('theme') ?? @js(filament()->getDefaultThemeMode()->value);

                    if (
                        window.theme === 'dark' ||
                        (window.theme === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)
                    ) {
                        document.documentElement.classList.add('dark');
                    }
                };

                loadDarkMode();

                document.addEventListener('livewire:navigated', loadDarkMode);
            </script>
        @endif
        @vite('resources/css/app.css')
    </head>
    <body
        class="font-primary bg-elevation-surface text-text-high dark:bg-elevation-surface-dark dark:text-text-high-dark min-h-full leading-none"
    >
        <x-guest-container-layout>
            {{ $slot }}
        </x-guest-container-layout>
        <div
            class="from-indigo-primary to-app-gradient-end pointer-events-none fixed top-0 left-0 h-full w-full bg-gradient-to-br opacity-[4%]"
        ></div>
        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>

<?php
