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
                border: 1px solid blue;
            }
        </style>
    </head>
    <body>
        <a href="{{ route('noticias.create') }}">Nueva Noticia</a>
        <h2>Listado de Categorias</h2>
        <table>
            <tr>
                <th>Título</th>
                <th>Contenido</th>
                <th>Fecha</th>
                <th>Autor</th>
                <th>Categoria</th>
            </tr>
            @foreach ($noticias as $noticia)
                <tr>
                    <td>{{ $noticia -> titulo }}</td>
                    <td>{{ $noticia -> contenido }}</td>
                    <td>{{ $noticia -> fecha }}</td>
                    <td>{{ $noticia -> autor }}</td>
                    <td>{{ $noticia -> categoria }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>