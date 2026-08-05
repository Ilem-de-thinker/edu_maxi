<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Style css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="/assets/js/config.js"></script>
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        @include('partials.tutors.header')
        @include('partials.tutors.sidebar')

        <div class="page-content">
            <main>
                {{ $slot }}
            </main>
            @include('partials.dashboard_footer')
        </div>
    </div>

    @include('partials.customization')
    @livewireScripts

    <script src="/assets/js/vendors.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>

</html>
