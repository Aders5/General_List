<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
</head>
<body>
    <h1>Lista de tareas</h1>
    <p>
        <a href ="{{ route('listas.create') }}">Añadir una nueva tarea </a>
    </p>
    <ul>
        @foreach ($listas as $lista )
        <li>
            Titulo de la tarea: <a href="{{ route('listas.show', $lista) }}">{{ $lista->titulo }}</a> |Puntos a consederar: {{ $lista->contenido }} 
            |Vigencia de la tarea: {{ $lista->vigencia->format('d/m/Y') }} 
        </li>
        @endforeach
    </ul>
</body>
</html>