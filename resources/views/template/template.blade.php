<!DOCTYPE html>
<html lang="{{$lang}}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if($lang == 'id')
    <meta name="description" content="PT. Dutacitra Nusa Jaya: Ahli Pintu Otomatis Anda sejak tahun 2000. Spesialis dalam teknologi Manusa. Dipercaya sebagai pemimpin global dalam solusi pintu.">
    @else
    <meta name="description" content="PT. Dutacitra Nusa Jaya: Your Automatic Door experts since 2000. Specializing in cutting-edge Manusa technology. Trusted global leaders in door solutions.">
    @endif

    {{-- Browser Configuration --}}
    <meta name="msapplication-config" content="/browserconfig.xml?t={{ env('VERSION_TIME') }}">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <title>PT. Dutacitra Nusa Jaya</title>

    {{-- Web App Manifest --}}
    <link rel="manifest" href="/site.webmanifest?t={{ env('VERSION_TIME') }}">

    {{-- Favicon --}}
    <link rel="icon" href="/favicon.ico?t={{ env('VERSION_TIME') }}" sizes="48x48">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?t={{ env('VERSION_TIME') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?t={{ env('VERSION_TIME') }}">

    {{-- Apple Touch Icon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?t={{ env('VERSION_TIME') }}">

    <!-- vite-->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <!-- css & js-->
    @yield('head')
</head>

<body class="bg-custom-white">
    @yield('body')

    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- Scripts --}}
    <script src="{{ asset('js/navbar.js') }}?t={{ env('VERSION_TIME') }}"></script>
</body>

</html>
