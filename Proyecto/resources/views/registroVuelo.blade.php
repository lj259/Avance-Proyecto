@extends('layouts.Plantilla')

@section('Titulo','Registro Vuelo')

@section('Contenido')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Registro de Vuelo</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('vuelo.store') }}" method="POST">
                @csrf
                <h3 class="mb-4">Datos del Vuelo</h3>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="aerolinea" class="form-label">Aerolínea:</label>
                        <input type="text" class="form-control" name="aerolinea" value="{{ old('aerolinea') }}">
                        <small class="text-danger"><strong>{{$errors->first('aerolinea')}}</strong></small>
                    </div>
                    <div class="col-md-6">
                        <label for="num_vuelo" class="form-label">Número de Vuelo:</label>
                        <input type="text" class="form-control" name="num_vuelo" value="{{ old('num_vuelo') }}">
                        <small class="text-danger"><strong>{{$errors->first('num_vuelo')}}</strong></small>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="origen" class="form-label">Origen:</label>
                        <input type="text" class="form-control" name="origen" value="{{ old('origen') }}">
                        <small class="text-danger"><strong>{{$errors->first('origen')}}</strong></small>
                    </div>
                    <div class="col-md-6">
                        <label for="destino" class="form-label">Destino:</label>
                        <input type="text" class="form-control" name="destino" value="{{ old('destino') }}">
                        <small class="text-danger"><strong>{{$errors->first('destino')}}</strong></small>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="fecha_salida" class="form-label">Fecha de Salida:</label>
                        <input type="date" class="form-control" name="fecha_salida" value="{{ old('fecha_salida') }}">
                        <small class="text-danger"><strong>{{$errors->first('fecha_salida')}}</strong></small>
                    </div>
                    <div class="col-md-6">
                        <label for="hora_salida" class="form-label">Hora de Salida:</label>
                        <input type="time" class="form-control" name="hora_salida" value="{{ old('hora_salida') }}">
                        <small class="text-danger"><strong>{{$errors->first('hora_salida')}}</strong></small>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="fecha_llegada" class="form-label">Fecha de Llegada:</label>
                        <input type="date" class="form-control" name="fecha_llegada" value="{{ old('fecha_llegada') }}">
                        <small class="text-danger"><strong>{{$errors->first('fecha_llegada')}}</strong></small>
                    </div>
                    <div class="col-md-6">
                        <label for="hora_llegada" class="form-label">Hora de Llegada:</label>
                        <input type="time" class="form-control" name="hora_llegada" value="{{ old('hora_llegada') }}">
                        <small class="text-danger"><strong>{{$errors->first('hora_llegada')}}</strong></small>
                    </div>
                </div>

                <div class="row g-3 mt-3">
                    <div class="col-md-6">
                        <label for="max_pasajeros" class="form-label">Máximo de Pasajeros:</label>
                        <input type="number" class="form-control" name="max_pasajeros" value="{{ old('max_pasajeros') }}">
                        <small class="text-danger"><strong>{{$errors->first('max_pasajeros')}}</strong></small>
                    </div>
                    <div class="col-md-6">
                        <label for="precio" class="form-label">Precio:</label>
                        <input type="number" class="form-control" name="precio" value="{{ old('precio') }}">
                        <small class="text-danger"><strong>{{$errors->first('precio')}}</strong></small>
                    </div>
                </div>

                <h3 class="mt-5">Escalas</h3>
                <div id="escalas-container" class="mt-3"></div>
                <button type="button" class="btn btn-secondary" id="add-escala">Agregar Escala</button>

                <div class="mt-4 text-end">
                    <button type="submit" class="btn btn-success">Guardar Vuelo</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('add-escala').addEventListener('click', function () {
        const container = document.getElementById('escalas-container');
        const escalaIndex = container.children.length;

        const escalaDiv = document.createElement('div');
        escalaDiv.classList.add('mb-3', 'border', 'p-3', 'rounded', 'bg-light');

        escalaDiv.innerHTML = `
            <h5 class="mb-3">Escala ${escalaIndex + 1}</h5>
            <div class="row g-3">
                <div class="col-md-4">
                    <label class="form-label">Destino:</label>
                    <input type="text" class="form-control" name="escalas[${escalaIndex}][destino]">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora de Salida:</label>
                    <input type="time" class="form-control" name="escalas[${escalaIndex}][hora_salida]">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Hora de Llegada:</label>
                    <input type="time" class="form-control" name="escalas[${escalaIndex}][hora_llegada]">
                </div>
            </div>
            <div class="mt-2 text-end">
                <button type="button" class="btn btn-danger remove-escala">Eliminar Escala</button>
            </div>
        `;

        container.appendChild(escalaDiv);

        escalaDiv.querySelector('.remove-escala').addEventListener('click', function () {
            escalaDiv.remove();
        });
    });
</script>
@endsection
