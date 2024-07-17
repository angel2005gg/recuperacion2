<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar destino</title>
</head>
<body>
    <h1>EDITAR DESTINO</h1>

    <form action="{{ route('Destino.update', $destino->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            CODIGO:
            <br>
            <input type="number" name="codigo" value="{{ old('codigo', $destino->codigo) }}">
        </label>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $destino->nombre) }}">
        </label>
        <br>
        <label>
            OTROS DATOS:
            <br>
            <input type="text" name="otros_datos" value="{{ old('otros_datos', $destino->otros_datos) }}">
        </label>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>