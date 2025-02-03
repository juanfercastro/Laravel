<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Alta realizada</title>
</head>

<body>
    <h1>Nuevo usuario</h1>   
    <form action="{{route('alta-usuario')}}" method="post">
        @csrf <!-- fuerza la salida de error -->
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br>
        <label for="apellidos">Apellidos</label><br>
        <input type="text" name="apellidos" id="apellidos"><br>
        <label for="telefono">Telefono</label><br>
        <input type="tel" name="telefono" id="telefono">
        
    </form>
</body>

</html>