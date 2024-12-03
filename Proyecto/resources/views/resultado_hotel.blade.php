@extends('layouts.Plantilla')
@section('Titulo', 'Hoteles')
@section('Contenido')
<form id="filtroForm" method="GET">
    @csrf
    <label for="nombre">Nombre del Hotel:</label>
    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control mb-2">

    <label for="precio">Precio máximo:</label>
    <input type="number" id="precio" name="precio" value="{{ old('precio') }}" class="form-control mb-2">

    <label for="categoria">Categoría:</label>
    <select id="categoria" name="categoria" class="form-control mb-2">
        <option value="">Seleccione</option>
        <option value="1">1 Estrella</option>
        <option value="2">2 Estrellas</option>
        <option value="3">3 Estrellas</option>
        <option value="4">4 Estrellas</option>
        <option value="5">5 Estrellas</option>
    </select>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" class="form-control mb-2">

    <label for="disponibilidad">Disponibilidad:</label>
    <select id="disponibilidad" name="disponibilidad" class="form-control mb-2">
        <option value="">Seleccione</option>
        <option value="Disponible">Disponible</option>
        <option value="No disponible">No disponible</option>
    </select>

    <button type="submit" class="btn btn-primary">Filtrar</button>
</form>

<h2>Resultados</h2>
<table id="hotelesTable" class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio por noche</th>
            <th>Ubicación</th>
            <th>Disponibilidad</th>
            <th>Descripción</th>
        </tr>
    </thead>
    <tbody>
        <!-- La tabla se llenará dinámicamente -->
    </tbody>
</table>

<script>
    $(document).ready(function() {
    $('#filtroForm').on('submit', function(event) {
        event.preventDefault();
        var formData = $(this).serialize();
        console.log(formData);  // Revisa el contenido de formData para asegurarte de que se están enviando los datos correctamente

        $.ajax({
            url: "{{ route('hotel.index') }}", // Asegúrate de usar la ruta correcta
            method: "GET",
            data: formData,
            success: function(response) {
                console.log(response); // Verifica la respuesta del servidor
                // Vaciamos correctamente el tbody antes de agregar nuevos registros
                $('#hotelesTable tbody').empty();

                if (response.hoteles.length > 0) {
                    response.hoteles.forEach(function(hotel) {
                        var row = `
                            <tr>
                                <td>${hotel.nombre}</td>
                                <td>${hotel.categoria} Estrellas</td>
                                <td>${hotel.precio}</td>
                                <td>${hotel.ubicacion}</td>
                                <td>${hotel.disponibilidad}</td>
                                <td>${hotel.descripcion}</td>
                            </tr>
                        `;
                        $('#hotelesTable tbody').append(row);
                    });
                } else {
                    $('#hotelesTable tbody').append('<tr><td colspan="6">No se encontraron hoteles.</td></tr>');
                }
            },
            error: function(xhr, status, error) {
                console.error(error); // Verifica el error en la consola
                alert('Hubo un error al cargar los resultados.');
            }
        });
    });
});

</script>

@endsection
