<?php

namespace App\Http\Controllers;

use App\Models\hotel;
use Illuminate\Http\Request;
use App\Http\Requests\agregarHotel;
use App\Models\destino;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    try {
        $query = DB::table('hoteles');

        if ($request->filled('destino_id')) {
            $query->where('destino_id', $request->destino_id);
        }

        if ($request->filled('nombre')) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->filled('precio')) {
            $query->where('precio', '<=', $request->precio);
        }

        if ($request->filled('calificacion')) {
            $query->where('calificacion', $request->calificacion);
        }

        $hoteles = $query->get();

        return response()->json(['hoteles' => $hoteles]);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinos = destino::all();
        return view('registroHotel',['destinos'=>$destinos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(agregarHotel $request)
    {
        DB::table('hoteles')->insert([
            'nombre' => $request->input('nombre'),
            'habitaciones' => $request->input('habitaciones'),
            'capacidad' => $request->input('capacidad'),
            'precio' => $request->input('precio'),
            'calificacion' => $request->input('calificacion'),
            'destino_id' => $request->input('ubicacion'),
            'distancia_centro' => $request->input('distancia'),
            'puntos_turisticos' => $request->input('turistico'),
            'servicios' => $request->input('servicios'),
            'created_at' => Carbon::now(), // Añade automáticamente la fecha de creación
            'updated_at' => Carbon::now()  // Añade automáticamente la fecha de actualización
        ]);
        $msj = $request->input('nombre');
        session()->flash('Exito','Se guardo el Hotel: '.$msj);

        $vuelos = DB::table('vuelos')
            ->join('destinos', 'vuelos.destino_id', '=', 'destinos.id')
            ->select('vuelos.*', 'destinos.nombre as destino_nombre')
            ->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get();                
        $destinos = DB::table('destinos')->get();
    
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos ,
        ]);
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
    public function edit(string $id)
    {
        $hotel = DB::table('hoteles')->where('id', $id)->first();
        $destinos = destino::all();
        return view("editHotel", [
            "hotel"=> $hotel,
            'destinos'=>$destinos,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(agregarHotel $request, string $id)
    {
        DB::table('hoteles')
        ->where('id', $id)
        ->update([
            'nombre' => $request->input('nombre'),
            'habitaciones' => $request->input('habitaciones'),
            'capacidad' => $request->input('capacidad'),
            'precio' => $request->input('precio'),
            'calificacion' => $request->input('calificacion'),
            'destino_id' => $request->input('ubicacion'),
            'distancia_centro' => $request->input('distancia'),
            'puntos_turisticos' => $request->input('turistico'),
            'servicios' => $request->input('servicios'),
            'updated_at' => Carbon::now() // Actualiza la fecha de actualización automáticamente
        ]);
        $msj = $request->input('nombre');
        session()->flash('Exito','Se actualizo el Hotel: '.$msj);
        $vuelos = DB::table('vuelos')
            ->join('destinos', 'vuelos.destino_id', '=', 'destinos.id')
            ->select('vuelos.*', 'destinos.nombre as destino_nombre')
            ->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get(); 
        $destinos = DB::table('destinos')->get();
    
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $msj = DB::table('hoteles')->where('id', $id)->value('nombre');
        DB::table('hoteles')->where('id', $id)->delete();
        session()->flash('Exito','Se elimino la publicacion del Hotel '.$msj);
        return redirect()->back();
    }
}
