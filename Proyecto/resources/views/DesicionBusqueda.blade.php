@extends('layouts.Plantilla')
@section('titulo','Desicion busqueda')
@section('Contenido')


    <div class="container mt-5">
        <h2 class="text-center">Encuentra tu Próxima Aventura</h2>
        
        <div class="bg-light p-4 rounded shadow text-center mt-4">
            <p>Selecciona el servicio que deseas buscar:</p>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary m-2" href="/busqueda/hoteles">
                    Buscar Hoteles
                </a>
                <a class="btn btn-primary m-2" href="/busqueda/vuelos">
                    Buscar Vuelos
                </a>
            </div>
        </div>
    </div>


@endsection