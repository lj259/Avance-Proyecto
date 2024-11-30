@extends('layouts.Plantilla')
@section('Titulo','Registro Cliente')
@section('Contenido')

<div class="container p-4 bg-white rounded shadow mt-4" style="max-width: 400px;">
        <h2 class="text-center mb-4">Registro de Clientes</h2>
        <form action="/registro" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                <label for="nombre">Nombre</label>
                <small class="form-text text-danger"><strong>{{$errors->first('nombre')}}</strong></small>

            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
                <label for="apellido">Apellido</label>
                <small class="form-text text-danger"><strong>{{$errors->first('apellido')}}</strong></small>

            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico">
                <label for="correo">Correo Electronico</label>
                <small class="form-text text-danger"><strong>{{$errors->first('correo')}}</strong></small>

            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" >
                <label for="telefono">Telefono</label>
                <small class="form-text text-danger"><strong>{{$errors->first('telefono')}}</strong></small>

            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                <label for="contraseña">Contraseña</label>
                <small class="form-text text-danger"><strong>{{$errors->first('contraseña')}}</strong></small>

                <div class="form-text">La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.</div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
    </div>

@endsection