<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Viajeros</title>
</head>
<body>
    <h1>VIAJEROS</h1>

    <a href="{{ route('Viajero.create') }}">Nuevo Cliente</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>NOMBRE</th>
                <th>DIRECCION</th>
                <th>TELEFONO</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viajero as $viajero)
                <tr>
                    <td>{{ $viajero->id }}</td>
                    <td>{{ $viajero->dni }}</td>
                    <td>{{ $viajero->nombre }}</td>
                    <td>{{ $viajero->direccion }}</td>
                    <td>{{ $viajero->tfno }}</td>
                    <td>
                        <a href="{{ route('Viajero.show', $viajero->id) }}">Mostrar</a>
                        <a href="{{ route('Viajero.edit', $viajero->id) }}">Editar</a>
                        <form action="{{ route('Viajero.destroy', $viajero->id) }}" method="POST" style="display:inline;">
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