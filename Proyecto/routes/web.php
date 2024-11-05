<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('inicio',[Controlador::class,'home'])->name('rutainicio');

Route::get('/registro',[ControladorVistas::class,'registro'])->name('rutaregis');

Route::get('/recuperacion',[ControladorVistas::class,'recuperacion'])->name('rutarecuperacion');


Route::post('/registro/cliente ', [ControladorVistas::class, 'registrocliente'])->name('registro/cliente');

Route::get('/busqueda/hoteles',[ControladorVistas::class,'busquedahoteles'])->name('rutabuscahoteles');



Route::get('/busqueda/vuelos',[ControladorVistas::class,'busquedavuelos,'])->name('rutabuscavuelos');

Route::get('/carrito/reservacion',[ControladorVistas::class,'carritoreservacion'])->name('rutareservacion');

Route::get('/Detalle/hotel',[ControladorVistas::class,'Detallehotel'])->name('rutahotel');

Route::get('/login',[ControladorVistas::class,'login'])->name('login');

Route::get('/metodopago',[ControladorVistas::class,'metodopago'])->name('metodopago');




Route::get('/resultado/hotel',[ControladorVistas::class,'resultadohotel'])->name('resultadohotel');

Route::get('/resultado/vuelo',[ControladorVistas::class,'resultadovuelo'])->name('resultadovuelo');





