<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $tituloHead ?? 'Historia Interactiva' }}</title>
</head>
<body>
    <x-zz.menu />

    <h1>{{ $tituloVisible }}</h1>

    <hr />

    {{ $slot }}

    <x-zz.pie />
</body>
</html>

