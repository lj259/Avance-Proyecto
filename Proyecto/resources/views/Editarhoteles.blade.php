@extends('layouts.Plantilla')
@section('Titulo','Editarhoteles')
@section('Contenido')

<div class="container p-4 bg-white rounded shadow mt-4" style="max-width: 800px;">
    <h2 class="text-center mb-4">Editar Hoteles</h2>
 
    <div class="mb-3">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del Hotel" value="{{ $hotel->nombre }}" readonly>
            <label for="nombre">Nombre del Hotel</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="habitaciones" name="habitaciones" placeholder="Número de Habitaciones Disponibles" value="{{ $hotel->habitaciones }}" readonly>
            <label for="habitaciones">Número de Habitaciones Disponibles</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="capacidad" name="capacidad" placeholder="Capacidad" value="{{ $hotel->adultos + $hotel->niños }}" readonly>
            <label for="capacidad">Capacidad</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="calificacion" name="calificacion" placeholder="Calificación" value="{{ $hotel->calificacion }}" readonly>
            <label for="calificacion">Calificación</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" value="{{ $hotel->ubicacion }}" readonly>
            <label for="ubicacion">Ubicación</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="distancia" name="distancia" placeholder="Distancia del Centro y Puntos Turísticos" value="{{ $hotel->distancia }} km" readonly>
            <label for="distancia">Distancia del Centro y Puntos Turísticos</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="servicios" name="servicios" placeholder="Servicios Incluidos" value="{{ $hotel->servicios }}" readonly>
            <label for="servicios">Servicios Incluidos</label>
        </div>
    </div>
  
</div>

@endsection
