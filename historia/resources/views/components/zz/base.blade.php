<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <title>{{ $tituloHead ?? 'Historia Interactiva' }}</title>
</head>
<body>
    <x-zz.menu_juego />

    <div class="contenido">


    <h1>{{ $titulo }}</h1>

    </div>


    <div class="contenido">
    {{ $slot }}

    </div>
    <x-zz.pie />


</body>
</html>

