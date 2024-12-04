<?php

namespace App\Http\Controllers;

use App\Models\vuelo;
use App\Models\escala;
use App\Models\destino;
use Illuminate\Http\Request;
use App\Http\Requests\agregarVuelo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
     public function index(Request $request)
    {
        $vuelos = Vuelo::query();
        
        if ($request->filled('aerolinea')) {
            $vuelos->where('aerolinea', 'like', '%' . $request->aerolinea . '%');
        }
        
        if ($request->filled('precio')) {
            $vuelos->where('precio', '<=', $request->precio);
        }
       
        if ($request->filled('escalas')) {
            if ($request->escalas == 0) { // Sin escalas
                $vuelos->whereDoesntHave('escalas');
            } elseif ($request->escalas == 1) { // Con escalas
                $vuelos->whereHas('escalas');
            }
        }
        
        if ($request->filled('hora_salida')) {
            $vuelos->where('hora_salida', '>=', $request->hora_salida);
        }
        
        if ($request->filled('hora_llegada')) {
            $vuelos->where('hora_llegada', '<=', $request->hora_llegada);
        }
        
        $vuelosData = $vuelos->with('escalas')->get()->map(function ($vuelo) {
            $vuelo->duracion = $this->calcularDuracion($vuelo);
            $disponibilidad = $this->verificarDisponibilidad($vuelo);
            $vuelo->disponibilidad = $disponibilidad['estado'];
            $vuelo->asientos_disponibles = $disponibilidad['asientos_disponibles'];

            $vuelo->escalas_detalles = $vuelo->escalas->map(function ($escala) {
                return [
                    'destino' => $escala->destino,
                    'hora_salida' => $escala->hora_salida,
                    'hora_llegada' => $escala->hora_llegada,
                ];
            });

            return $vuelo;
        });
        

        return response()->json(['vuelos' => $vuelosData]);
    }

    private function calcularDuracion($vuelo)
    {
        $hora_salida = Carbon::parse($vuelo->hora_salida);
        $hora_llegada = Carbon::parse($vuelo->hora_llegada);

        return $hora_salida->diff($hora_llegada)->format('%h horas %i minutos');
    }

    private function verificarDisponibilidad($vuelo)
    {
        $asientos_disponibles = $vuelo->max_pasajeros - $vuelo->pasajeros;
        $estado = $asientos_disponibles > 0 ? 'Disponible' : 'No disponible';
    
        return [
            'estado' => $estado,
            'asientos_disponibles' => $asientos_disponibles,
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destinos = destino::query()->all();
        return view("registroVuelo",['destinos'=>$destinos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(agregarVuelo $request)
    {
        $addVuelo = new Vuelo();
        $addVuelo->aerolinea = $request->input("aerolinea");
        $addVuelo->num_vuelo = $request->input("num_vuelo");
        $addVuelo->origen_id = $request->input("origen_id");
        $addVuelo->destino_id = $request->input("destino_id");
        $addVuelo->fecha_salida = $request->input("fecha_salida");
        $addVuelo->fecha_llegada = $request->input("fecha_llegada");
        $addVuelo->hora_salida = $request->input("hora_salida");
        $addVuelo->hora_llegada = $request->input("hora_llegada");
        $addVuelo->max_pasajeros = $request->input("max_pasajeros");
        $addVuelo->pasajeros = 0;
        $addVuelo->precio = $request->input("precio");
        $addVuelo->save();
    
        $escalas = $request->input('escalas');
        if($escalas && is_array( $escalas )) {
            foreach ($escalas as $escalaData) {
                $addEscala = new Escala();
                $addEscala->destino = $escalaData['destino'];
                $addEscala->hora_salida = $escalaData['hora_salida'];
                $addEscala->hora_llegada = $escalaData['hora_llegada'];
                $addEscala->vuelo_id = $addVuelo->id;
                $addEscala->save();
            }
        }
        $msj1 = $request->input("num_vuelo");
        $msj2 = $request->input("origen_id");
        $msj3 = $request->input("destino");
        session()->flash("Exito","Se ha guardado el vuelo ".$msj1." de ".$msj2." hacia ".$msj3);
        
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
     * Display the specified resource.
     */
    public function show(vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $vuelo = DB::table('vuelos')->where('id', $id)->first();

        return view("editVuelo", ["vuelo"=> $vuelo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $addVuelo = Vuelo::find($id);
        $addVuelo->aerolinea = $request->input("aerolinea");
        $addVuelo->num_vuelo = $request->input("num_vuelo");
        $addVuelo->origen_id = $request->input("origen_id");
        $addVuelo->destino_id = $request->input("destino_id");
        $addVuelo->fecha_salida = $request->input("fecha_salida");
        $addVuelo->fecha_llegada = $request->input("fecha_llegada");
        $addVuelo->hora_salida = $request->input("hora_salida");
        $addVuelo->hora_llegada = $request->input("hora_llegada");
        $addVuelo->max_pasajeros = $request->input("max_pasajeros");
        $addVuelo->pasajeros = 0;
        $addVuelo->precio = $request->input("precio");
        $addVuelo->save();
    
        $escalas = $request->input('escalas');
    if ($escalas && is_array($escalas)) {
        $addVuelo->escalas()->delete();
        foreach ($escalas as $escalaData) {
            $addEscala = new Escala();
            $addEscala->destino_id = $escalaData['destino_id'];
            $addEscala->hora_salida = $escalaData['hora_salida'];
            $addEscala->hora_llegada = $escalaData['hora_llegada'];
            $addEscala->vuelo_id = $addVuelo->id;
            $addEscala->save();
        }
    }

        $msj1 = $request->input("num_vuelo");
        $msj2 = $request->input("origen_id");
        $msj3 = $request->input("destino");
        session()->flash("Exito","Se ha guardado el vuelo ".$msj1." de ".$msj2." hacia ".$msj3);
        
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
        ]);;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vuelo = vuelo::find($id);
        $msj1 = $vuelo->num_vuelo;
        $msj2 = $vuelo->origen_id;
        $msj3 = $vuelo->destino_id;
        $vuelo->escalas()->delete();
        $vuelo->delete();
        session()->flash("Exito","Se ha eliminado el vuelo ".$msj1." de ".$msj2." hacia ".$msj3);
        
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
}
