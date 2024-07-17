<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Destino</title>
</head>
<body>
    <h1>DETALLES DEL DESTINO</h1>

    <p>ID: {{ $destino->id }}</p>
    <p>dni: {{ $destino->codigo }}</p>
    <p>nombre: {{ $destino->nombre }}</p>
    <p>direccion: {{ $destino->otros_datos }}</p>
   

    <a href="{{ route('Destino.index') }}">Volver</a>
</body>
</html>