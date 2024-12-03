<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
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
        $addHotel = new hotel();
        $addHotel->nombre = $request->input('nombre');
        $addHotel->habitaciones = $request->input('habitaciones');
        $addHotel->adultos = $request->input('adultos');
        $addHotel->niños = $request->input('niños');
        $addHotel->calificacion = $request->input('calificacion');
        $addHotel->ubicacion = $request->input('ubicacion');
        $addHotel->distancia = $request->input('distancia');
        $addHotel->turistico = $request->input('turistico');
        $addHotel->servicios = $request->input('servicios');
        $addHotel->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se guardo el Hotel: '.$msj);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updateHotel = hotel::find($id);
        $updateHotel->nombre = $request->input('nombre');
        $updateHotel->habitaciones = $request->input('habitaciones');
        $updateHotel->adultos = $request->input('adultos');
        $updateHotel->niños = $request->input('niños');
        $updateHotel->calificacion = $request->input('calificacion');
        $updateHotel->ubicacion = $request->input('ubicacion');
        $updateHotel->distancia = $request->input('distancia');
        $updateHotel->turistico = $request->input('turistico');
        $updateHotel->servicios = $request->input('servicios');
        $updateHotel->save();
        $msj = $request->input('nombre');
        session()->flash('Exito','Se actualizo el Hotel: '.$msj);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Hotel = hotel::find($id);
        $msj = $Hotel->nombre;
        $Hotel->delete();
        session()->flash('Exito','Se elimino la publicacion del Hotel '.$msj);
        return redirect()->back();
    }
}
