<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
</head>
<body>
    <h1>Añadir tarea(EDIT)</h1>
    <p>
        <a href ="{{ route('listas.index') }}">Volver a index</a>
    </p>

    @if (session('info'))
    <div style="background-color: #4caf50; color: white; padding: 10px; border-radius: 5px; margin-bottom: 20px; font-family: sans-serif;">
        {{ session('info') }}
    </div>
    @endif


   <form action="{{ route('listas.update', $lista) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="titulo">Titulo de la tarea:</label>
        <input type="text" id="titulo" name="titulo" class="form-control @error('titulo') is-invalid @enderror" value="{{ old('titulo', $lista->titulo ?? '')}}">
        @error('titulo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="contenido">Puntos a consederar:</label>
        <textarea id="contenido" name="contenido" rows="4" cols="50">{{ old('contenido', $lista->contenido ?? '') }}</textarea>
        @error('contenido')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <label for="vigencia">Vigencia de la tarea:</label>
        <input type="date" id="vigencia" name="vigencia" value="{{ old('vigencia', isset($lista) ? \Carbon\Carbon::parse($lista->vigencia)->format('Y-m-d') : '') }}" class="form-control @error('vigencia') is-invalid @enderror" value="{{ old('vigencia', $lista->vigencia ?? '')}}">
        @error('vigencia')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <br><br>

        <input type="submit" value="Guardar oferta">
</form>
      
</body>
</html>