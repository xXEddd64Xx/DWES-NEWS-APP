<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWES NEWS</title>
    <style>
        body {
            margin: auto;
            padding: 50px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, td, th {
            border: 1px solid red;
        }
    </style>
</head>
<body>
    <a href="{{ route('autores.create') }}">Nuevo Autor</a>
    <h2>Listado de Autores</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>email</th>
        </tr>
        @foreach ($autores as $autor)
            <tr>
                <td>{{ $autor -> nombre }}</td>
                <td>{{ $autor -> apellido }}</td>
                <td>{{ $autor -> email }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>