<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Inspinia is the #1 best-selling admin dashboard template on Wrapmarket. Perfect for building CRM, CMS, project management tools, and custom web apps with clean UI, responsive design, and powerful features." />
    {{-- <meta name="keywords" content="Inspinia, admin dashboard, Wrapmarket, Wrapbootstrap, HTML template, Bootstrap admin, CRM template, CMS template, responsive admin, web app UI, admin theme, best admin template" /> --}}
    <meta name="author" content="WebAppLayers" />

    <!-- App favicon -->
    {{-- <link rel="shortcut icon" href="assets/images/favicon.ico" /> --}}


    <!-- Style css -->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Head.js -->
    <script src="/assets/js/config.js"></script>
    @livewireStyles

</head>

<body>
    <!-- Start Page Content here -->
    <div class="flex min-h-screen items-center p-12.5">
        <div class="container">
            <div class="flex justify-center">
                <div class="xl:w-5/6">
                   {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <!-- End Page content -->

   
    <!-- Password Suggestion Js -->
    <script type="module" src="assets/js/pages/auth-password.js"></script>
    @livewireScripts

</body>

</html>
