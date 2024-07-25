<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('ttl')</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>@yield('ttl')</h1>
    <nav class="nav">
        <a href="{{ @route('home') }}">Nos livres</a>
        <a href="{{ @route('add') }}">Ajouter un livre</a>
    </nav>
    @section('content')

    @show
</body>
</html>