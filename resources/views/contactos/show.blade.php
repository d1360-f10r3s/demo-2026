<h1>Detalle del contacto</h1>

<p>ID: {{ $contacto->id }}</p>
<p>Nombre: {{ $contacto->nombre }}</p>
<p> Correo: {{ $contacto->correo }}</p>
<p>Mensaje: {{ $contacto->mensaje }}</p>

<a href="{{ route('contactos.index') }}">Volver</a>