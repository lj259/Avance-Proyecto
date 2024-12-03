@extends('layouts.Plantilla')
@section('Titulo','Registro vuelo')
@section('Contenido')

<div class="container mt-5">
    <form action="{{ route('destino.update',[$destino->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <h2 class="mb-4">Datos del destino</h2>
        
        <div class="mb-3">
            <label for="nombre" class="form-label">Ciudad:</label>
            <input type="text" class="form-control" name="nombre" value="{{ $destino->nombre }}">
            <small class="form-text text-danger"><strong>{{$errors->first('nombre')}}</strong></small>
        </div>
        
        <button type="submit" class="btn btn-success">Guardar ciudad</button>
    </form>
</div>


@endsection
