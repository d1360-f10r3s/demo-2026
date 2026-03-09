<?php
namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactoController extends Controller
{

    public function index()
    {
        $contactos=Contacto::all();

        return view('contactos.index')->with('contactos', $contactos);
    }

    public function create()
    {
        return view('contactos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10',
        ]);

        $contacto = new Contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();

        return redirect()->route('contactos.index');
    }

    public function show(Contacto $contacto)
    {
        return view('contactos.show')->with('contacto', $contacto);
    }

    public function edit(Contacto $contacto)
    {
        return view('contactos.edit')->with('contacto', $contacto);
    }

    public function update(Request $request, Contacto $contacto)
    {
        $contacto->update($request->all());

        return redirect()->route('contactos.index');
    }

    public function destroy(Contacto $contacto)
    {
        $contacto->delete();

        return redirect()->route('contactos.index');
    }
}