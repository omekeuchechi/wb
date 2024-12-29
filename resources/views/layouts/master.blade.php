<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admindashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.5.2-web/css/all.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.2.0/css/line.min.css"> --}}
    <link rel="stylesheet" href="../node_modules/@iconscout/unicons/css/line.css">
</head>
<body>
    @yield('content')
    <script src="{{ asset('assets/js/admindashboard.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.2.0/script/monochrome/bundle.min.js"></script> --}}
    {{-- <script type="module">
        import iconscoutunicons from 'n'
        </script> --}}
        <script src="../node_modules/@iconscout/unicons/script/monochrome/bundle.js"></script>
</body>
</html>