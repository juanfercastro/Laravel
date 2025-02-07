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
    <h1>Matriculando alumnos en {{$materia->nombre}}</h1>
    <form action="{{route('matricular-alumnos', $materia->id)}}" method="post">
        @csrf
        @foreach ($alumnos as $a)
            @if ($a->materias->contains($materia))
                <input type="checkbox" name="id_alumnos[]" value="{{$a->id}}" checked>
            @else
                <input type="checkbox" name="id_alumnos[]" value="{{$a->id}}">
            @endif
            <label>{{$a->nombre}}[{{$a->dni}}]</label><br>
        @endforeach
        <button type="submit">Guardar</button>
    </form>
</body>
</html>