<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Destino</title>
</head>
<body>
    <h1>CREAR DESTINO</h1>

    <form action="{{ route('Destino.store') }}" method="POST">
        @csrf

        <label>
            CODIGO:
            <br>
            <input type="number" name="codigo">
        </label>
        <br>
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
            OTROS DATOS:
            <br>
            <input type="text" name="otros_datos">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>