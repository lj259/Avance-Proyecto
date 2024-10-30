<?php

namespace App\Http\Controllers;

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

