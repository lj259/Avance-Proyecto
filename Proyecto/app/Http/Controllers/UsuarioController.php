<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistroCliente;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registro_cliente');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorRegistroCliente $request)
    {
        $addCliente = new usuario();
        $addCliente->nombre = $request->input('nombre');
        $addCliente->apellido = $request->input('apellido');
        $addCliente->correo = $request->input('correo');
        $addCliente->telefono = $request->input('telefono');
        $addCliente->contraseña = $request->input('contraseña');
        $addCliente->save();
        $msj = $request->input('txtnombre');
        session()->flash('Exito','Se guardo el cliente: '.$msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorRegistroCliente $request, usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        //
    }
}
