<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWES - NEWS - APP</title>
</head>
<body>
    <a href="{{ route('autores.index') }}">Ver listado de autores</a>
    <h1>Añadir un nuevo Autor</h1>
    <form action="{{ route('autores.store') }}" method="POST">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Introduzca su nombre">
        <label>Apellido</label>
        <input type="text" name="apellido" placeholder="Introduzca su apellido">
        <label>Email</label>
        <input type="text" name="email" placeholder="Introduzca su email">
    </form>
</body>
</html>