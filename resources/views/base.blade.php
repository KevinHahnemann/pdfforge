<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PDF Creator Version</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body id="@yield('body_id')">
    <div class="contend">
        @yield('contend')
    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/script.js') }}"></script>
@yield('scripts')
</html>
