@extends('layouts.Plantilla') 
@section('Titulo','Registro vuelo')
@section('Contenido')

<div class="container mt-5">
    <form action="{{ route('hotel.store') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        <h2 class="mb-4 text-primary text-center">Datos del Hotel</h2>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre del hotel">
            <small class="form-text text-danger"><strong>{{$errors->first('nombre')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="habitaciones" class="form-label">Habitaciones:</label>
            <input type="text" class="form-control" name="habitaciones" value="{{ old('habitaciones') }}" placeholder="Cantidad de habitaciones">
            <small class="form-text text-danger"><strong>{{$errors->first('habitaciones')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad:</label>
            <input type="text" class="form-control" name="capacidad" placeholder="Capacidad total del hotel">
            <small class="form-text text-danger"><strong>{{$errors->first('capacidad')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio por noche:</label>
            <input type="text" class="form-control" name="precio" value="{{ old('precio') }}" placeholder="Precio por noche en USD">
            <small class="form-text text-danger"><strong>{{$errors->first('precio')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="calificacion" class="form-label">Estrellas:</label>
            <input type="text" class="form-control" name="calificacion" placeholder="Calificación del hotel (1 a 5 estrellas)">
            <small class="form-text text-danger"><strong>{{$errors->first('calificacion')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicación:</label>
            <select name="ubicacion" class="form-control">
                <option selected disabled>Selecciona una ciudad</option>
                @isset($destinos)
                    @foreach($destinos as $destino)
                        <option value="{{$destino->id}}">{{$destino->nombre}}</option>
                    @endforeach
                @endisset
            </select>
            <small class="form-text text-danger"><strong>{{$errors->first('ubicacion')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="distancia" class="form-label">Distancia al centro:</label>
            <input type="text" class="form-control" name="distancia" value="{{ old('distancia') }}" placeholder="Distancia en kilómetros">
            <small class="form-text text-danger"><strong>{{$errors->first('distancia')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="turistico" class="form-label">Puntos Turísticos cercanos:</label>
            <input type="text" class="form-control" name="turistico" value="{{ old('turistico') }}" placeholder="Lugares turísticos cercanos">
            <small class="form-text text-danger"><strong>{{$errors->first('turistico')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="servicios" class="form-label">Servicios del hotel:</label>
            <input type="text" class="form-control" name="servicios" value="{{ old('servicios') }}" placeholder="Ejemplo: WiFi, Spa, Restaurante">
            <small class="form-text text-danger"><strong>{{$errors->first('servicios')}}</strong></small>
        </div>

        <button type="submit" class="btn btn-primary w-100">Guardar Vuelo</button>
    </form>
</div>

@endsection
