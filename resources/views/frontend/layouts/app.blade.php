<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Themehaus — Good design. A better starting point.')</title>
    <meta name="description" content="@yield('description', 'Thoughtfully crafted dashboard themes for your next big thing.')">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,650;0,9..40,700;0,9..40,800;1,9..40,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/app.css') }}">
</head>

<body>
    @include('frontend.partials.header')
    <main>@yield('content')</main>
    @include('frontend.partials.footer')
    <script src="{{ asset('assets/frontend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/themehaus.js') }}"></script>
    @stack('scripts')
</body>

</html>
