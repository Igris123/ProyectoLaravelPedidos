<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion del Pedido</h1>
    <ul>
        <li>{{ $info->id}}</li>
        <li>{{ $info->destinatario}}</li>
        <li>{{ $info->peso}}</li>
        <li>{{ $info->descripcion}}</li>
        <li>{{ $info->contacto}}</li>
        <li>{{ $info->estado}}</li>

    </ul>
</body>
</html>