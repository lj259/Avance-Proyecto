<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ControladorVistas;

Route::get('/',[ControladorVistas::class,'inicio'])->name('index');
Route::resource('usuario',UsuarioController::class);
Route::resource('vuelo',VueloController::class);
Route::resource('hotel',HotelController::class);
Route::resource('destino',DestinoController::class);

Route::get('/login',[ControladorVistas::class,'login'])->name('login');
Route::get('/admin/panel',[ControladorVistas::class,'panelAdmin'])->name('panelAdmin');
Route::post('/iniciar-sesion',[ControladorVistas::class,'loginValidar'])->name('login');
Route::get('/recuperacion',[ControladorVistas::class,'recuperacion'])->name('rutarecuperacion');

Route::get('/registro/cliente', [ControladorVistas::class, 'registrocliente'])->name('registro/cliente');
Route::post('/registro',[ControladorVistas::class,'registro'])->name('rutaregis');


Route::get('/Desicion',[ControladorVistas::class,'DesicionBusqueda'])->name('DesicionBusqueda');
Route::get('/Busqueda/hoteles',[ControladorVistas::class,'busquedahoteles'])->name('rutabuscahoteles');
Route::post('/BuscaHotel',[ControladorVistas::class,'BuscaHotel'])->name('BuscarHotel');
Route::get('/resultado/hotel',[ControladorVistas::class,'resultadohotel'])->name('resultadohotel');
Route::post('/resultado/filtro',[ControladorVistas::class,'filtroshotel'])->name('filtroshotel');
Route::get('/Detalle/hotel',[ControladorVistas::class,'Detallehotel'])->name('rutahotel');

Route::get('/busqueda/vuelos',[ControladorVistas::class,'busquedavuelos'])->name('rutabuscavuelos');
Route::get('/resultado/vuelo',[ControladorVistas::class,'resultadovuelo'])->name('resultadovuelo');
Route::post('/BuscaVuelo',[ControladorVistas::class,'BuscaVuelo'])->name('BuscarVuelo');
Route::get('/resultado/Vuelo',[ControladorVistas::class,'resultadovuelo'])->name('resultadovuelo');
Route::post('/resultado/filtro',[ControladorVistas::class,'filtroshotel'])->name('filtroshotel');
Route::get('/Detalle/hotel',[ControladorVistas::class,'Detallehotel'])->name('rutahotel');


Route::get('/carrito/reservacion',[ControladorVistas::class,'carritoreservacion'])->name('rutareservacion');
Route::get('/metodos',[ControladorVistas::class,'metodos'])->name('metodos');
Route::post('/metodopago',[ControladorVistas::class,'metodopago'])->name('metodopago');
Route::get('/pagoExitoso',[ControladorVistas::class,'pagoExitoso'])->name('pagoExitoso');
Route::post('/metodo/Tarjeta',[ControladorVistas::class,'Tarjeta'])->name('Tarjeta');
Route::post('/metodo/Paypal',[ControladorVistas::class,'Paypal'])->name('Paypal');

Route::get('/admin/Vuelos',[ControladorVistas::class,'adminVuelos'])->name('adminVuelos');
Route::post('/admin/Vuelos/agregar',[ControladorVistas::class,'adminVuelosagregar'])->name('adminVuelosagregar');

Route::get('/admin/Hotel',[ControladorVistas::class,'adminHotel'])->name('adminHotel');
Route::post('/admin/Hotel/agregar',[ControladorVistas::class,'adminHotelagregar'])->name('adminHotelagregar');




