<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
        <h1 class="text-2xl font-bold mb-4">Editar artículos</h1>
            <form method="POST" action="{{ route('tarea.update', $tarea->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                <label>Título:</label>
                    <input type="text" name="titulo" id="titulo" value="{{ $tarea->titulo }}">
                </div>
                <div class="form-group">
                <label>Contenido:</label>
                    <textarea name="contenido" id="contenido" >{{ $tarea->contenido }}</textarea>
                </div><br>
                <button type="submit">Actualizar</button>
            </form>
</body>
</html>
