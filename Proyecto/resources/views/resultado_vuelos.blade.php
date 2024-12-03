@extends('layouts.Plantilla')
@section('Titulo', 'Vuelos')
@section('Contenido')

<form id="filtroForm" method="GET">
    @csrf
    <label for="aerolinea">Aerolínea:</label>
    <input type="text" id="aerolinea" name="aerolinea" value="{{ old('aerolinea') }}" class="form-control mb-2">

    <label for="precio">Precio máximo:</label>
    <input type="number" id="precio" name="precio" value="{{ old('precio') }}" class="form-control mb-2">

    <label for="escalas">Escalas:</label>
    <select id="escalas" name="escalas" class="form-control mb-2">
        <option value="">Seleccione</option>
        <option value="0">Sin escalas</option>
        <option value="1">Con escalas</option>
    </select>

    <label for="hora_salida">Hora de Salida:</label>
    <input type="time" id="hora_salida" name="hora_salida" class="form-control mb-2">

    <label for="hora_llegada">Hora de Llegada:</label>
    <input type="time" id="hora_llegada" name="hora_llegada" class="form-control mb-2">

    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<h2>Resultados</h2>
<table id="vuelosTable" class="table table-bordered mt-3">
    <thead>
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
        <!-- La tabla se llenará dinámicamente -->
    </tbody>

        <tbody>
            <!-- Resultados AJAX -->
        </tbody>
</table>

<script>
    $(document).ready(function() {
    $('#filtroForm').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);

        $.ajax({
            url: "{{ route('vuelo.index') }}",
            method: "GET",
            data: formData,
            success: function(response) {
                // Vaciamos correctamente el tbody antes de agregar nuevos registros
                $('#vuelosTable tbody').empty(); 

                if (response.vuelos.length > 0) {
                    response.vuelos.forEach(function(vuelo) {
                        // Se imprimen las escalas y disponibilidad correctamente
                        var escalasDetalles = vuelo.escalas_detalles.map(function(escala) {
                            return escala.destino + ' (' + escala.hora_salida + ' - ' + escala.hora_llegada + ')';
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
                    $('#vuelosTable tbody').append('<tr><td colspan="8">No se encontraron vuelos.</td></tr>');
                }
            },
            error: function() {
                alert('Hubo un error al cargar los resultados.');
            }
        });
    });
});

</script>
@endsection
