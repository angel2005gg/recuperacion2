<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear viajero</title>
</head>
<body>
    <h1>CREAR VIAJERO</h1>

    <form action="{{ route('Viajero.store') }}" method="POST">
        @csrf

        <label>
            DNI:
            <br>
            <input type="number" name="dni">
        </label>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            Direccion:
            <br>
            <input type="text" name="direccion">
        </label>
        <br>
        <label>
            Telefono:
            <br>
            <input type="number" name="tfno">
        </label>
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>