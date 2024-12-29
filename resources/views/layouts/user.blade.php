<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web bros</title>

    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.2-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/userui/index.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/userui/nav.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/userui/aside.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/userui/main.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/userui/footer.css') }}">

    @livewireStyles
</head>
<body>

    {{-- nav section --}}
    <livewire:ui-nav />
    {{-- aside section --}}
    <livewire:ui-aside />
    {{-- main section --}}
    <livewire:ui-main />
    {{-- footer section --}}
    <livewire:ui-footer />
    

    @livewireScripts
    <script src="{{ asset('assets/js/user.js') }}"></script>
</body>
</html>