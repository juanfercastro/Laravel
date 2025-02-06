<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <td> {{route('matricular_alumnos').$m->id;}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>