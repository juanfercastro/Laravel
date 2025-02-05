<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        .hidden{
            display: none;
        }
    </style>
    <script>
        function ocultarNumero(){
            setTimeout(function(){
                document.getElementById('secuencia').classList.add('hidden')
                document.getElementById('form').classList.remove('hidden')
            },3000)
        }
    </script>
</head>
<body onload="ocultarNumero()">
    <h1>Simon Dice</h1>
    <div id="secuencia">
        <h2>Memoriza estos numeros{{ implode('-', $numeros) }}</h2>
    </div>
    <div id="form">
        <form method="post" action="{{ url('/simon') }}">
            @csrf
            <label for="ans">Respuesta:</label>
            <input type="text" name="ans" id="ans" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>