<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Requests\Validadorlogin; 
use App\Http\Requests\validadorRegistroCliente;
use App\Http\Requests\ValidadorRecuperacion;
use App\Http\Requests\validadorBusquedaHoteles;
use App\Http\Requests\validadorBusquedaVuelos;
use App\Http\Requests\validadorCarrito;
use App\Http\Requests\validarTarjeta;
use App\Http\Requests\validarPaypal;
use App\Http\Requests\agregarVuelo;
use App\Http\Requests\agregarHotel;

use App\Models\destino;
use App\Models\hotel;

class ControladorVistas extends Controller
{
    public function inicio(){
    return view('inicio');
    }
    public function login(){
    return view('login');
    }
    public function panelAdmin(){
        $vuelos = DB::table('vuelos')
            ->join('destinos', 'vuelos.destino_id', '=', 'destinos.id')
            ->select('vuelos.*', 'destinos.nombre as destino_nombre')
            ->get();
        $hoteles = DB::table('hoteles')
            ->join('destinos', 'hoteles.destino_id', '=', 'destinos.id')
            ->select('hoteles.*', 'destinos.nombre as destino_nombre')
            ->get(); 
        $destinos = DB::table('destinos')->get();
    
        // Devuelve la vista con las variables
        return view('panelAdmin', [
            'vuelos' => $vuelos,
            'hoteles' => $hoteles,
            'destinos' => $destinos,
        ]);
    }

    public function loginValidar(Validadorlogin $peticion){
        $valido = $peticion->input('txtnombre');
        session()->flash('Exito','Bienvenido: ' .$valido);

        return to_route('DesicionBusqueda');
    }

    public function recuperacion()
    {
        return view('recuperacion_contraseña');
    
    }

    public function registrocliente(){
        return view('registro_Cliente');
        }
    
    public function registro(validadorRegistroCliente $peticion){
        $valido = $peticion->input('nombre');
        session()->flash('Exito','Registro exitoso de: ' .$valido);
        return to_route('login2');
        }

    public function DesicionBusqueda(){
        return view('DesicionBusqueda');
        }

    public function busquedahoteles(){
        return view('busqueda_hoteles');
        }

    public function BuscaHotel(validadorBusquedaHoteles $peticion){
        $valido = $peticion->input('txtdestinacion');
        session()->flash('Exito','Hoteles encontrados en: ' .$valido);
        return to_route('resultadohotel');    
        }
    public function resultadohotel(){
        $destinos = destino::all();

        return view('resultado_hotel',["destinos"=> $destinos]);
        }
    public function filtroshotel(){
        session()->flash('Filtros','Proximamente');
        return redirect()->back(); 
        }
        

    public function busquedavuelos(){
        return view('busqueda_vuelos');
    }
    public function BuscaVuelo(validadorBusquedaVuelos $peticion){
        $valido = $peticion->input('destination');
        session()->flash('Exito','Vuelos hacia: ' .$valido);
        return to_route('resultado_vuelos');    
        }
    
    public function resultadovuelo(){
        return view('resultado_vuelos');

    }

    
    
    public function metodos(){
        return view('metodo_pago');  
    }
    public function metodopago(validadorCarrito $peticion){
        session()->flash('Exito','Seleccione su metodo de pago');
        
        return to_route('metodos');  
    }

    public function carritoreservacion(){
        return view('Carrito_Reservaciones');

        }
    public function Tarjeta(validarTarjeta $peticion){
        
        session()->flash('Exito','Pago Exitoso!!');
        
        return to_route('pagoExitoso');            
        }
    public function Paypal(validarPaypal $peticion){
        session()->flash('Exito','Pago Exitoso!!');        
        return to_route('pagoExitoso');
        }
    public function pagoExitoso(){
        return view('Carrito_Reservaciones');
        }

    public function adminVuelos(){
        return view('administracionVuelos');
        }
    public function adminVuelosagregar(agregarVuelo $peticion){
        $vuelo=$peticion->input('numero_vuelo');
        $espacio=" ";
        $agredado="ha sido registrado";
        $mensaje=$vuelo.$espacio.$agredado;
        session()->flash('Exito','El vuelo con numero: '.$mensaje);
        return to_route('adminVuelos');
        }
    public function adminHotel(){
        return view('administracionHoteles');
        }
    public function adminHotelagregar(agregarHotel $peticion){
        $vuelo=$peticion->input('nombre_hotel');
        $espacio=" ";
        $agredado="ha sido registrado";
        $mensaje=$vuelo.$espacio.$agredado;
        session()->flash('Exito','El Hotel: '.$mensaje);
        return to_route('adminHotel');
        }
}
