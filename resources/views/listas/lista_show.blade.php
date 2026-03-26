<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tarea detalles</title>
</head>
<body>
    <h1>Tarea Detalles</h1>
    <ul>
        <li>
            <strong>Titulo de la tarea:</strong> {{ $lista->titulo }} | 
            <strong>Puntos a considerar:</strong> {{ $lista->contenido}}|
            <strong>Vigencia de la oferta:</strong> {{ $lista->vigencia->format('d/m/Y') }} 
        </li>
    </ul>
    <p>
        <a href="{{ route('listas.edit', $lista) }}">Editar</a>
        <br><br>
        <a href ="{{ route('listas.index') }}">Volver a index</a>
        <form action="{{ route('listas.destroy', $lista) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </p>
</body>
</html>