<h1>Lista de contactos</h1>

<a href="{{ route('contactos.create') }}">Crear contacto</a>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Mensaje</th>
</tr>

@foreach($contactos as $contacto)
<tr>
    <td>{{ $contacto->nombre }}</td>
    <td>{{ $contacto->correo }}</td>
    <td>{{ $contacto->mensaje }}</td>
</tr>
@endforeach

</table>