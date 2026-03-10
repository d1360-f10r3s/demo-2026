<h1>Crear Contacto</h1>

<form action="{{ route('contactos.store') }}" method="POST">
@csrf

<label>Nombre</label>
<input type="text" name="nombre">

<br><br>

<label>Correo</label>
<input type="email" name="correo">

<br><br>

<label>Mensaje</label>
<textarea name="mensaje"></textarea>

<br><br>

<button type="submit">Guardar</button>

</form>

<a href="{{ route('contactos.index') }}">Volver</a>