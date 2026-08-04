<!doctype html>
<html lang="en">

<!-- Mirrored from webapplayers.com/inspinia/tailwind/pages-empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2026 04:07:16 GMT -->

<head>
    <meta charset="utf-8" />
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Inspinia is the #1 best-selling admin dashboard template on Wrapmarket. Perfect for building CRM, CMS, project management tools, and custom web apps with clean UI, responsive design, and powerful features." />
    <meta name="keywords"
        content="Inspinia, admin dashboard, Wrapmarket, Wrapbootstrap, HTML template, Bootstrap admin, CRM template, CMS template, responsive admin, web app UI, admin theme, best admin template" />
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
    <div class="wrapper">
        @include('partials.students.header')
        <!-- Topbar End -->
        @include('partials.students.sidebar')
        <!-- End Sidebar -->
        <!-- Start Page Content here -->

        <div class="page-content">
            <main><!-- Page Title Start -->
                {{ $slot }}
                <!-- Page Title End -->
            </main>
            <!-- Footer Start -->
            @include('partials.dashboard_footer')
            <!-- Footer End -->
        </div>

        <!-- End Page content -->
    </div>

    @include('partials.customization')
    @livewireScripts

    <script src="/assets/js/vendors.min.js"></script>

    <script src="/assets/js/app.js"></script>
</body>

<!-- Mirrored from webapplayers.com/inspinia/tailwind/pages-empty.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2026 04:07:16 GMT -->

</html>
