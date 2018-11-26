<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
<h2>Mensaje enviado</h2>
<p><strong>Nombre: </strong>{{ $data['name'] }}</p>
<p><strong>Correo: </strong>{{ $data['email'] }}</p>
<p><strong>Mensaje: </strong></p>
<p>{!!  nl2br($data['message']) !!}</p>
</body>
</html>