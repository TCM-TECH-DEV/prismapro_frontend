<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light" data-footer="dark">

<head>
    <meta charset="utf-8">
    <title>Prisma Pro (America), Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="eCommerce + Admin HTML Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('build/images/favicon.ico') }}">

    <!-- head css -->
    @include('layouts.head-css')
</head>

<body>

    <!-- top tagbar -->
    @include('layouts.top-tagbar')
    <!-- topbar -->
    @include('layouts.topbar-fluid')

    @yield('content')

    <!-- footer -->
    @include('layouts.footer-fluid')
    <!-- scripts -->
    @include('layouts.vendor-scripts')

</body>

</html>
