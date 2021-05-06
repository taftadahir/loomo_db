<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script>
        window._asset = '{{ asset('') }}';
    </script>
</head>

<body class="antialiased bg-black2">

    <div id="app" class="overflow-hidden">
        <dashboard active-navbar-item="user"></dashboard>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>