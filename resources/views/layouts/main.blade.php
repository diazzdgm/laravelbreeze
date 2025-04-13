<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Superhero App</title>

    <!-- Scripts / Styles -->
    @vite(['resources/sass/style.scss', 'resources/js/app.js'])
</head>
<body>
    <main class="container">
        @yield('content')
    </main>
</body>
</html>
