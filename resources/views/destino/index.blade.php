<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Destinos</title>
</head>
<body>
    <h1>DESTINOS</h1>

    <a href="{{ route('Destino.create') }}">Nuevo DESTINO</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CODIGO</th>
                <th>NOMBRE</th>
                <th>OTROS DATOS</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($destino as $destino)
                <tr>
                    <td>{{ $destino->id }}</td>
                    <td>{{ $destino->codigo }}</td>
                    <td>{{ $destino->nombre }}</td>
                    <td>{{ $destino->otros_datos }}</td>
                    <td>
                        <a href="{{ route('Destino.show', $destino->id) }}">Mostrar</a>
                        <a href="{{ route('Destino.edit', $destino->id) }}">Editar</a>
                        <form action="{{ route('Destino.destroy', $destino->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>