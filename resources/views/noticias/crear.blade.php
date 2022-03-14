<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DWES - NEWS - APP</title>
</head>
<body>
    <a href="{{ route('noticias.index') }}">Ver listado de noticias</a>
    <h1>Añadir una nueva noticia</h1>
    <form action="{{ route('noticias.store') }}" method="POST">
        @csrf
        <label>Titulo</label>
        <input type="text" name="nombre" placeholder="Introduzca su nombre">
        <label>Contenido</label>
        <input type="text" name="contenido" placeholder="Introduzca el Contenido">
        <label>Fecha</label>
        <input type="text" name="fecha" placeholder="Introduzca la fecha">
        <label>Autor</label>
        <select name="autor_id" id="autor_id">
            @foreach($autores as $autor)
                <option value="{{ $autor -> id }}">{{ $autor -> nombre }}</option>
            @endforeach
        </select>
        <label>Categoria</label>
        <select name="categoria_id" id="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria -> id }}">{{ $categoria -> nombre }}</option>
            @endforeach
        </select>
    </form>
</body>
</html>