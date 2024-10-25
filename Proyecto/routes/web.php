<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('inicio',[ControladorVistas::class,'home'])->name('rutainicio');

Route::get('/registro',[ControladorVistas::class,'registro'])->name('rutaregis');

Route::get('/recupereacion',[ControladorVistas::class,'recuperacion'])->name('rutarecuperacion');

Route::post('/forminicio',[ControladorVistas::class,'forminicio'])->name('forminicio');

Route::post('/formregistro',[ControladorVistas::class,'forminicio'])->name('formregis');

Route::post('/formrecuperacion',[ControladorVistas::class,'formrecuperacion'])->name('formrecuperecion');
