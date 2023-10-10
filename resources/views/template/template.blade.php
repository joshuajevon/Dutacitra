<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>PT Dutacitra Nusa Jaya</title>

    {{-- favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="48x48">

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- css & js-->
    @yield('head')
</head>

<body>
    @yield('body')

    {{-- Scripts --}}
</body>

</html>
