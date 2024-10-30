<?php

namespace App\Http\Controllers;
use App\Http\Requests\validadorRegistro;

class Controller
{
    public function home()
    {
        return view('inicio');
    }

    public function registro()
    {
        return view('regis');
    }

    public function recuperacion()
    {
        return view('recuperacion');
    }

}

