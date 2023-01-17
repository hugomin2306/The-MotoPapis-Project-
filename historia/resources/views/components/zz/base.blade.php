<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $tituloHead ?? 'Historia Interactiva' }}</title>
</head>
<body>


    <h1>{{ $titulo }}</h1>

    <hr />

    {{ $slot }}


</body>
</html>

