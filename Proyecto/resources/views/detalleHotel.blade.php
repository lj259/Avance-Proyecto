@extends('layouts.Plantilla')

@section('Titulo', 'Detalles del Hotel')

@section('Contenido')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Detalles del Hotel: {{ $hotel->nombre }}</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Información General</h5>
                    <p><strong>Nombre:</strong> {{ $hotel->nombre }}</p>
                    <p><strong>Categoría:</strong> {{ $hotel->calificacion }} Estrellas</p>
                    <p><strong>Precio por noche:</strong> ${{ number_format($hotel->precio, 2) }}</p>
                    <p><strong>Ubicación:</strong> {{ $hotel->destino_id }} <!-- Esto puede ser el nombre de la ciudad, debes ajustarlo si es necesario --></p>
                </div>
                <div class="col-md-6">
                    <h5>Politicas de Cancelacion</h5>
                    <a href="#">
                        Detalles
                    </a>
                </div>
            </div>
            <div class="mt-3">
                <a href="{{ route('resultadohotel') }}" class="btn btn-secondary">Volver a la lista de hoteles</a>
            </div>
        </div>
    </div>
</div>
@endsection
