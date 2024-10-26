<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorRegistro;

abstract class Controller
{
    public function procesarRegistro(validadorRegistro $peticion)
    {
        
        $nombre = $peticion->input('txtnombre');
        $apellido = $peticion->input('txtapellido');
        $telefono = $peticion->input('txttelefono');
        $correo = $peticion->input('txtcorreo');

        session()->flash('exito', 'Se guardó el usuario: ' . $nombre . ' ' . $apellido);

        return to_route('formregis');
    }
}
