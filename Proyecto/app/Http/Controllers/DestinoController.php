<?php

namespace App\Http\Controllers;

use App\Models\destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view("registroDestino");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addDestino = new destino;
        $addDestino->nombre = $request->input('nombre');
        $addDestino->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se a guardado el destino: '.$msj);
        
        $vuelos = DB::table('vuelos')->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get(); 
        $destinos = DB::table('destinos')->get();
    
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos,
        ]);;
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
    public function edit(string $id)
    {
        $destino = destino::find($id);
        return view("editDestino", [
            'destino'=>$destino,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateDestino = destino::find($id);
        $updateDestino->nombre = $request->input('nombre');
        $updateDestino->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se a actualizado el destino'.$msj);
        
        $vuelos = DB::table('vuelos')->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get(); 
        $destinos = DB::table('destinos')->get();
    
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos,
        ]);;
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
        
        $vuelos = DB::table('vuelos')->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get(); 
        $destinos = DB::table('destinos')->get();
    
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos,
        ]);;
    }
}
