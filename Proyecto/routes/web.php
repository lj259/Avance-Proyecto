<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/',[Controller::class,'home'])->name('rutainicio');

Route::get('/registro',[Controller::class,'registro'])->name('rutaregis');

Route::get('/recupereacion',[Controller::class,'recuperacion'])->name('rutarecuperacion');

Route::post('/forminicio',[Controller::class,'forminicio'])->name('forminicio');

Route::post('/formregistro', [Controller::class, 'formregistro'])->name('formregis');

Route::post('/formrecuperacion',[Controller::class,'formrecuperacion'])->name('formrecuperecion');
