<!-- Esto es como el lista-contactos.php anterior -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de contactos</h1>

    <ul>
        @foreach ($contactos as $contacto)
            <li>
                {{ $contacto->nombre }} - {{ $contacto->correo }} - {{ $contacto->mensaje }}
            </li>
        @endforeach
    </ul>
</body>
</html>