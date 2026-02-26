<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <meta name="description" content="Formulario hecho con HTML, CSS y PHP">
    <meta name="author" content="Diego Emilio Flores González">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="max-w-xl mx-auto
    min-h-dvh
    bg-gradient-to-b from-black via-sky-600 to-white">

    <h1 class="text-4xl font-extrabold font-mono leading-tight mt-8 mb-6 text-white text-center">FORMULARIO DE CONTACTO</h1>

    // Mostrar errores 
    @if($errors->any())
        <div class="alert alert-danger mb-6 px-4 py-3 rounded bg-red-500 text-white">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/recibe-formulario" method="POST" class="px-3">
    @csrf

    <div class="flex-col text-sky-500
        bg-sky-950 px-4 py-4 mt-3 
        border rounded-xl border-sky-500
        shadow-md font-mono text-sm">

        <label class="block mb-2"><strong>Nombre:</strong></label>
        <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300"><br>

        @error('nombre')
            <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
        @enderror

        <label class="block mb-2"><strong>Correo:</strong></label>
        <input type="email" id="correo" name="correo" value="{{ old('correo') }}" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300"><br>

        @error('correo')
            <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
        @enderror

        <label class="block mb-2"><strong>Mensaje:</strong></label>
        <textarea id="msj" name="mensaje" value="{{ old('mensaje') }}" class="w-full mb-4 px-3 py-2 bg-sky-900 border border-sky-500 rounded text-white focus:outline-none focus:border-sky-300" rows="8"></textarea><br>
   
         @error('mensaje')
            <div class="text-red-500 text-sm mb-2">{{ $message }}</div>
        @enderror
   
   
    </div>

    <div class="flex justify-center mt-6 mb-4">
        <input class="bg-sky-900 hover:bg-blue-900 text-white font-bold py-3 px-8 rounded-lg 
        shadow-md font-mono" type="submit" value="Enviar">
    </div>
    </form>
</body>
</html>