<!-- Esto es como el lista-contactos.php anterior -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Muestra lista de Contactos</title>
</head>

<body class="max-w-xl mx-auto
    min-h-dvh
    bg-gradient-to-b from-black via-sky-600 to-white">

    <h1 class="text-4xl font-extrabold font-mono leading-tight mt-8 mb-6 text-white text-center">Lista de contactos</h1>

    <div class="flex-col text-yellow-400
        bg-sky-950 px-4 py-4 mt-3 
        border rounded-xl border-sky-500
        shadow-md font-mono text-sm">

    <ul>
        @foreach ($contactos as $contacto)
            <li>
                {{ $contacto->nombre }} - {{ $contacto->correo }} <br> <span class="text-white"> Mensaje:</span> <span class="whitespace-pre-wrap break-words text-sky-400">{{ $contacto->mensaje }}</span>
                <br><br>
            </li>
        @endforeach
    </ul>
    </div>

     <div class="flex justify-center mt-6 mb-4">
        <a href="{{ route('contactos.create') }}" class="bg-sky-900 hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-lg 
        shadow-md font-mono text-sm" type="submit" value="Enviar">Crear contacto</a>
    </div>

</body>
</html>

