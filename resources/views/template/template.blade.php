<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title></title>

    {{-- favicon --}}
    <link rel="icon" href="/favicon.ico" sizes="48x48">

    {{-- Build CSS --}}
    <link rel="stylesheet" href="{{ asset('css/build.css') }}?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Google Font --}}

    {{-- Jquery --}}

    <!-- css & js-->
    @yield('head')
</head>

<body>
    @yield('body')


    {{-- Scripts --}}
</body>

</html>
