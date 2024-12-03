@extends('layouts.Plantilla')
@section('Titulo',' Hoteles')
@section('Contenido')

<div class="container p-4 bg-white rounded shadow mt-4" style="max-width: 800px;">
    <h2 class="text-center mb-4"> Hoteles</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre del Hotel</th>
                <th>Número de Habitaciones Disponibles</th>
                <th>Capacidad</th>
                <th>Calificación</th>
                <th>Ubicación</th>
                <th>Distancia del Centro y Puntos Turísticos</th>
                <th>Servicios Incluidos</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $hotel)
            <tr>
                <td>{{ $hotel->nombre }}</td>
                <td>{{ $hotel->habitaciones }}</td>
                <td>{{ $hotel->adultos + $hotel->niños }}</td>
                <td>{{ $hotel->calificacion }}</td>
                <td>{{ $hotel->ubicacion }}</td>
                <td>{{ $hotel->distancia }} km</td>
                <td>{{ $hotel->servicios }}</td>
                <td>   <div class="card-footer text-muted">
                <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                    {{ __('Actualizar') }}
                </a>
                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" id="Eliminar_cliente_{{ $cliente->id }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-sm" onclick="confirmarEliminacion({{ $cliente->id }})">
                        {{ __('Eliminar') }}
                    </button>
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
