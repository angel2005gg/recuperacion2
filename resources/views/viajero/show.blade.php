<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del viajero</title>
</head>
<body>
    <h1>DETALLES DEL VIAJERO</h1>

    <p>ID: {{ $viajero->id }}</p>
    <p>dni: {{ $viajero->dni }}</p>
    <p>nombre: {{ $viajero->nombre }}</p>
    <p>direccion: {{ $viajero->direccion }}</p>
    <p>Telefono: {{ $viajero->tfno }}</p>

    <a href="{{ route('Viajero.index') }}">Volver</a>
</body>
</html>
