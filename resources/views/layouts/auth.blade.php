<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50 dark:bg-gray-900">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    <!-- Vite Assets (Includes pure Tailwind CSS and JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="h-full font-sans antialiased text-gray-900 dark:text-gray-100">
    <!-- Page Container -->
    <div class="flex min-h-screen items-center justify-center p-4 sm:p-6 lg:p-10">
        <div class="w-full max-w-5xl">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>
