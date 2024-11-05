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
public function registrocliente(){
return view('registro_Cliente');
}
public function busquedahoteles()
{
return view('busqueda_hoteles');
}

public function busquedavuelos(){
    return view('busqueda_vuelos');
}
 
public function carritoreservacion(){
    return view('Carrito_Reservaciones');

}
public function Detallehotel()
{
    return view('Detalle_hotel');

}
public function login()
{
return view('login');
}
public function metodopago(){
    return view('metodo_pago');  
}

public function resultadohotel(){
return view('resultado_hotel');
}
public function resultadovuelo(){

    return view('recuperacion');

}



}
