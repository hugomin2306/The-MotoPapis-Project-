<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <title>{{ $tituloHead ?? 'Historia Interactiva' }}</title>
</head>
<body>
    <x-zz.menu />

    <div class="contenido">


    <h1>{{ $titulo }}</h1>

    </div>

    <hr />

    <div class="contenido">
    {{ $slot }}

    </div>
    <footer>
        <p>2023 - IES Laguna de Joatzel</p>
    </footer>


</body>
</html>

