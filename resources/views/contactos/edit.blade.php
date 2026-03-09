<h1>Editar Contacto</h1>

<form action="{{ route('contactos.update', $contacto->id) }}" method="POST">

@csrf
@method('PUT')

<label>Nombre</label>
<input type="text" name="nombre" value="{{ $contacto->nombre }}">

<br>

<label>Email</label>
<input type="email" name="email" value="{{ $contacto->email }}">

<br>

<label>Mensaje</label>
<textarea name="mensaje">{{ $contacto->mensaje }}</textarea>

<br><br>

<button type="submit">Actualizar</button>

</form>

<a href="{{ route('contactos.index') }}">Volver</a>