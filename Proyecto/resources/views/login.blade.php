@extends('layouts.Plantilla')
@section('Titulo','Inicio de Sesion')
@section('Contenido')

<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 400px; border-radius: 10px;">
        <h2 class="text-center mb-4">Inicio de Sesion</h2>
        <form action="/iniciar-sesion" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="txtnombre"  placeholder="Ingresa tu nombre" value="{{old('txtnombre')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtnombre')}}</strong></small>

            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="txtapellido"  placeholder="Ingresa tu apellido" value="{{old('txtapellido')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtapellido')}}</strong></small>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="txtcorreo"  placeholder="nombre@dominio.com" value="{{old('txtcorreo')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtcorreo')}}</strong></small>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="txtcontraseña"  placeholder="Ingresa tu contraseña">
                <small class="form-text text-danger"><strong>{{$errors->first('txtcontraseña')}}</strong></small>
            </div>
           
            <div class="text-center mb-3">
                <a href="/recuperacion" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
    </div>
</div>
@endsection
