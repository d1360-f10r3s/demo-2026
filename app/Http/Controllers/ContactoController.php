<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function contacto()
    {
        return view('formulario-contacto');
    }

    public function recibeFormulario(Request $request)
    {
        //dd($request->all(), $request->correo, $request->nombre);

        /* Validar formulario con reglas personalizadas
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10|max:255', 
        ]); */

        // Validar formulario
        $request->validate([
            'nombre' => 'required|min:5',
            'correo' => 'required|email',
            'mensaje' => 'required|min:10|max:255', 
        ]);

        dd($request->all());



        return 'Formulario recibido';
    }
}


