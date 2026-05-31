<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ $titulo }}</title>
</head>
<body>
    <h1>{{ $titulo }}</h1>
    <p>{{ $mensaje ?? '' }}</p>

    <a href="/perfil/1">Ver perfil</a>
</body>
</html>