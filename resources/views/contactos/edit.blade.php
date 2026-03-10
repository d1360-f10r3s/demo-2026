<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Editar Contacto</title>
</head>
<body class="max-w-xl mx-auto
    min-h-dvh
    bg-gradient-to-b from-black via-sky-600 to-white">
<h1 class="text-4xl font-extrabold font-mono leading-tight mt-8 mb-6 text-white text-center">Editar Contacto</h1>

<form action="{{ route('contactos.update', $contacto->id) }}" method="POST">

@csrf
@method('PUT')

<div class="flex-col text-sky-500
        bg-sky-950 px-4 py-4 mt-3 
        border rounded-xl border-sky-500
        shadow-md font-mono text-sm">

<label class="block mb-2"><strong>Nombre:</strong></label>
        <input type="text" id="nombre" name="nombre" 
        value="{{ old('nombre', $contacto->nombre) }}" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300"><br>

<br>

<label class="block mb-2"><strong>Correo:</strong></label>
<input type="email" id="correo" name="correo" value="{{ old('correo', $contacto->correo) }}" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300">

<br>

<label class="block mb-2"><strong>Mensaje:</strong></label>
<textarea id="mensaje" name="mensaje" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300">{{ old('mensaje', $contacto->mensaje) }}</textarea>

<br><br>

<button class="bg-sky-900 hover:bg-blue-900 text-yellow-400 font-bold py-3 px-5 rounded-lg shadow-md font-mono text-sm"type="submit">Actualizar</button>
</div>
</form>

<div class="flex justify-center mt-6 mb-4">
        <a href="{{ route('contactos.index') }}" class="bg-sky-900 hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-lg 
        shadow-md font-mono text-sm" type="submit" value="Enviar">Volver a la lista</a>
</div>
</body>
</html>