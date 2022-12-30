<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    
    <!-- CSS For Homepage -->
    <link rel="stylesheet" href="{{ asset('css/homepage/homepage.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
</head>
<body>
    
    {{-- Main Content --}}
    <main class="main-content">
        @yield('content')
    </main>
    {{-- Main Content End --}}

    {{-- Bootsrap 5 JS --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>