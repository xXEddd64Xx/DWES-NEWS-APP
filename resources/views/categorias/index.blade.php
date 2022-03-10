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
    <h2>Listado de Categorias</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria -> nombre }}</td>
                <td>{{ $categoria -> descripcion }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>