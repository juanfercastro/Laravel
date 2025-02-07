<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <title>Materias</title>
</head>
<body>
    <h1>Materias</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Horas</th>
            <th>Acciones</th>
        </tr>
        @foreach ($materias as $m)
            <tr>
                <td>{{}}</td>
                <td></td>
                <td><a href="{{route('matricular_alumnos').$m->id;}}">Matricular</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>