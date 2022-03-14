<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWES - NEWS - APP</title>
</head>
<body>
    <a href="{{ route('categorias.index') }}">Ver listado de categorias</a>
    <h1>Añadir una nueva categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Introduzca su nombre">
        <label>Descripcion</label>
        <input type="text" name="descripcion" placeholder="Introduzca la descripcion">
    </form>
</body>
</html>