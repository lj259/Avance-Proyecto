@extends('layouts.Plantilla')

@section('Titulo', 'Vuelos')

@section('Contenido')

<div class="container p-4 bg-light rounded shadow-sm">
    <form id="filtroForm" method="GET" class="mb-4">
        @csrf
        <h3 class="mb-3 text-primary">Filtrar Vuelos</h3>

        <div class="mb-3">
            <label for="aerolinea" class="form-label">Aerolínea:</label>
            <input type="text" id="aerolinea" name="aerolinea" value="{{ old('aerolinea') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio máximo:</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="escalas" class="form-label">Escalas:</label>
            <select id="escalas" name="escalas" class="form-select">
                <option value="">Seleccione</option>
                <option value="0">Sin escalas</option>
                <option value="1">Con escalas</option>
            </select>
        </div>

        <div class="row">
            <div class="col-md-6">
                <label for="hora_salida" class="form-label">Hora de Salida:</label>
                <input type="time" id="hora_salida" name="hora_salida" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="hora_llegada" class="form-label">Hora de Llegada:</label>
                <input type="time" id="hora_llegada" name="hora_llegada" class="form-control">
            </div>
        </div>

        <div class="mt-4 text-end">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>
    </form>
</div>

<div class="mt-5">
    <h3 class="text-primary">Resultados</h3>
    <table id="vuelosTable" class="table table-bordered table-striped mt-3">
        <thead class="table-primary">
            <tr>
                <th>Número de Vuelo</th>
                <th>Aerolínea</th>
                <th>Horario</th>
                <th>Duración</th>
                <th>Precio por pasajero</th>
                <th>Escalas</th>
                <th>Disponibilidad</th>
                <th>Asientos Disponibles</th>
            </tr>
        </thead>
        <tbody>
            <!-- Datos dinámicos llenados por JavaScript -->
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function () {
        $('#filtroForm').on('submit', function (event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: "{{ route('vuelo.index') }}",
                method: "GET",
                data: formData,
                success: function (response) {
                    $('#vuelosTable tbody').empty();

                    if (response.vuelos.length > 0) {
                        response.vuelos.forEach(function (vuelo) {
                            var escalasDetalles = vuelo.escalas_detalles.map(function (escala) {
                                return `${escala.destino} (${escala.hora_salida} - ${escala.hora_llegada})`;
                            }).join(', ');

                            var row = `
                                <tr>
                                    <td>${vuelo.num_vuelo}</td>
                                    <td>${vuelo.aerolinea}</td>
                                    <td>${vuelo.hora_salida} - ${vuelo.hora_llegada}</td>
                                    <td>${vuelo.duracion}</td>
                                    <td>${vuelo.precio}</td>
                                    <td>${escalasDetalles || 'Sin escalas'}</td>
                                    <td>${vuelo.disponibilidad}</td>
                                    <td>${vuelo.asientos_disponibles}</td>
                                </tr>
                            `;
                            $('#vuelosTable tbody').append(row);
                        });
                    } else {
                        $('#vuelosTable tbody').append('<tr><td colspan="8" class="text-center">No se encontraron vuelos.</td></tr>');
                    }
                },
                error: function () {
                    alert('Hubo un error al cargar los resultados.');
                }
            });
        });
    });
</script>
@endsection
