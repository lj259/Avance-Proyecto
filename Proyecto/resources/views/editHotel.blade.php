@extends('layouts.Plantilla')
@section('Titulo','Registro vuelo')
@section('Contenido')

<div class="container mt-5">
    <form action="{{ route('hotel.update',[$hotel->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="mb-4">Datos del Vuelo</h2>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $hotel->nombre }}">
            <small class="form-text text-danger"><strong>{{$errors->first('nombre')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="habitaciones" class="form-label">Habitaciones:</label>
            <input type="text" class="form-control" name="habitaciones" value="{{ $hotel->habitaciones }}">
            <small class="form-text text-danger"><strong>{{$errors->first('habitaciones')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad:</label>
            <input type="text" class="form-control" name="capacidad" value="{{ $hotel->capacidad }}">
            <small class="form-text text-danger"><strong>{{$errors->first('capacidad')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio por noche:</label>
            <input type="text" class="form-control" name="precio" value="{{ $hotel->precio }}">
            <small class="form-text text-danger"><strong>{{$errors->first('precio')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="calificacion" class="form-label">Estrellas:</label>
            <input type="text" class="form-control" name="calificacion" value="{{$hotel->calificacion}}">
            <small class="form-text text-danger"><strong>{{$errors->first('calificacion')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="ubicacion" class="form-label">Ubicacion:</label>
            <input type="text" class="form-control" name="ubicacion" value="{{$hotel->ubicacion}}">
            <small class="form-text text-danger"><strong>{{$errors->first('ubicacion')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="distancia" class="form-label">Distancia al centro:</label>
            <input type="text" class="form-control" name="distancia" value="{{ $hotel->distancia_centro }}">
            <small class="form-text text-danger"><strong>{{$errors->first('distancia')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="turistico" class="form-label">Puntos Turisticos cercanos:</label>
            <input type="text" class="form-control" name="turistico" value="{{ $hotel->puntos_turisticos }}">
            <small class="form-text text-danger"><strong>{{$errors->first('turistico')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="servicios" class="form-label">Servicios del hotel:</label>
            <input type="text" class="form-control" name="servicios" value="{{$hotel->servicios }}">
            <small class="form-text text-danger"><strong>{{$errors->first('servicios')}}</strong></small>
        </div>

        
        <button type="submit" class="btn btn-success">Guardar Vuelo</button>
    </form>
</div>

@endsection
