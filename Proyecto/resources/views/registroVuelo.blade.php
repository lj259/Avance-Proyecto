@extends('layouts.Plantilla')
@section('Titulo','Registro vuelo')
@section('Contenido')

<div class="container mt-5">
    <form action="{{ route('vuelo.store') }}" method="POST">
        @csrf
        <h2 class="mb-4">Datos del Vuelo</h2>
        
        <div class="mb-3">
            <label for="aerolinea" class="form-label">Aerolínea:</label>
            <input type="text" class="form-control" name="aerolinea" value="{{ old('aerolinea') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('aerolinea')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="num_vuelo" class="form-label">Número de Vuelo:</label>
            <input type="text" class="form-control" name="num_vuelo" value="{{ old('num_vuelo') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('num_vuelo')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="origen" class="form-label">Origen:</label>
            <input type="text" class="form-control" name="origen">
            <small class="form-text text-danger"><strong>{{$errors->first('origen')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="destino" class="form-label">Destino:</label>
            <input type="text" class="form-control" name="destino">
            <small class="form-text text-danger"><strong>{{$errors->first('destino')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="fecha_salida" class="form-label">Fecha de Salida:</label>
            <input type="date" class="form-control" name="fecha_salida" value="{{ old('fecha_salida') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('fecha_salida')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="hora_salida" class="form-label">Hora de Salida:</label>
            <input type="time" class="form-control" name="hora_salida" value="{{ old('hora_salida') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('hora_salida')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="fecha_llegada" class="form-label">Fecha de Llegada:</label>
            <input type="date" class="form-control" name="fecha_llegada" value="{{ old('fecha_llegada') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('fecha_llegada')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="hora_llegada" class="form-label">Hora de Llegada:</label>
            <input type="time" class="form-control" name="hora_llegada" value="{{ old('hora_llegada') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('hora_llegada')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="max_pasajeros" class="form-label">Máximo de Pasajeros:</label>
            <input type="number" class="form-control" name="max_pasajeros" value="{{ old('max_pasajeros') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('max_pasajeros')}}</strong></small>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio:</label>
            <input type="number" class="form-control" name="precio" value="{{ old('precio') }}">
            <small class="form-text text-danger"><strong>{{$errors->first('precio')}}</strong></small>
        </div>

        <h2 class="mb-4">Escalas</h2>
        <div id="escalas-container"></div>
        
        <button type="button" class="btn btn-primary mb-3" id="add-escala">Agregar Escala</button>
        <button type="submit" class="btn btn-success">Guardar Vuelo</button>
    </form>
</div>

<script>
    document.getElementById('add-escala').addEventListener('click', function () {
        const container = document.getElementById('escalas-container');
        const escalaIndex = container.children.length;

        const escalaDiv = document.createElement('div');
        escalaDiv.classList.add('mb-3', 'border', 'p-3', 'rounded');

        escalaDiv.innerHTML = `
            <div class="mb-3">
                <label>Destino:</label>
                <input type="text" class="form-control" name="escalas[${escalaIndex}][destino]">
                <small class="form-text text-danger"><strong>{{$errors->first('destino')}}</strong></small>
            </div>

            <div class="mb-3">
                <label>Hora de Salida:</label>
                <input type="time" class="form-control" name="escalas[${escalaIndex}][hora_salida]">
                <small class="form-text text-danger"><strong>{{$errors->first('hora_salida')}}</strong></small>
            </div>

            <div class="mb-3">
                <label>Hora de Llegada:</label>
                <input type="time" class="form-control" name="escalas[${escalaIndex}][hora_llegada]">
                <small class="form-text text-danger"><strong>{{$errors->first('hora_llegada')}}</strong></small>
            </div>

            <button type="button" class="btn btn-danger remove-escala">Eliminar Escala</button>
        `;

        container.appendChild(escalaDiv);

        escalaDiv.querySelector('.remove-escala').addEventListener('click', function () {
            escalaDiv.remove();
        });
    });
</script>

@endsection
