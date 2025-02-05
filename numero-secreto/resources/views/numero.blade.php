<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>Adivina el numero secreto</h1>
    @if (session()->has('mensaje'))
        <p>{{ session('mensaje') }}</p>
    @endif
    @if (session('tries')>0)
        <form action="{{ url('/numero') }}" method="post">
            @csrf
            <label for="number">Adivina el numero secreto</label>
            <input type="number" name="number" id="number" min="1" max="1000" required>
            <button type="submit">Adivinar</button>
        </form><br>
    @endif
    <a href="{{ url('/gameOver') }}">Jugar de nuevo</a>
</body>
</html>