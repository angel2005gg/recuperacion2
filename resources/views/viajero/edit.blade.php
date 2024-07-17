<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar VIAJERO</title>
</head>
<body>
    <h1>EDITAR VIAJERO</h1>

    <form action="{{ route('Viajero.update', $viajero->id) }}" method="POST">
        @csrf
        @method('put')

        <label>
            DNI:
            <br>
            <input type="number" name="dni" value="{{ old('dni', $viajero->dni) }}">
        </label>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{ old('nombre', $viajero->nombre) }}">
        </label>
        <br>
        <label>
            Direccion:
            <br>
            <input type="text" name="direccion" value="{{ old('direccion', $viajero->direccion) }}">
        </label>
        <br>
        <label>
            Telefono:
            <br>
            <input type="number" name="tfno" value="{{ old('tfno', $viajero->tfno) }}">
        </label>
        <br>
        <br>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>