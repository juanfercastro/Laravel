<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Listado de Alumnos</title>
</head>
<body>
    <h1>Lista del alumnado</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Media</th>
            <th>Equipo</th>
        </tr>
        @foreach ($alumnos as $a )
            <tr>
                <td>{{$a->nombre}}</td>
                <td>{{$a->dni}}</td>
                <td>{{$a->media}}</td>
                <td>{{$a->equipo->nombre}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>