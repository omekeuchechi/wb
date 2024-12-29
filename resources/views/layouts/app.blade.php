<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Web-bros</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/contactus.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about_main.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.0.2/bootstrap-5.0.2/dist/css/bootstrap.min.css') }}"> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- nav --}}
    @include('includes.nav')
    

    @yield('content')

    @include('includes.footer')

    <script src="{{ asset('assets/fontawesome-free-6.5.2-web/js/all.js') }}"></script>
    {{-- <script src={{ asset('assets/bootstrap-5.0.2/bootstrap-5.0.2/dist/js/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/jquery/dist/jquery.min.js') }}"></script> --}}
</body>
</html>
