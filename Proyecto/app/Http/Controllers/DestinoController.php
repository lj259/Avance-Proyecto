<?php

namespace App\Http\Controllers;

use App\Models\destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addDestino = new destino;
        $addDestino = $request->input('nombre');
        $addDestino->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se a guardado el destino'.$msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(destino $destino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(destino $destino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateDestino = destino::find($id);
        $updateDestino = $request->input('nombre');
        $updateDestino->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se a actualizado el destino'.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $destino = destino::find($id);
        $msj = $destino->nombre;
        $destino->delete();
        session()->flash('Exito','Se a eliminado el destino'.$msj);
        return redirect()->back();
    }
}
