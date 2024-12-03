@extends('layouts.Plantilla')

@section('Titulo', 'Hoteles')

@section('Contenido')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title mb-0">Filtrar Hoteles</h3>
        </div>
        <div class="card-body">
            <form id="filtroForm" method="GET" class="row g-3">
                @csrf
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Nombre del Hotel:</label>
                    <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="precio" class="form-label">Precio máximo:</label>
                    <input type="number" id="precio" name="precio" value="{{ old('precio') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="categoria" class="form-label">Categoría:</label>
                    <select id="categoria" name="categoria" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="1">1 Estrella</option>
                        <option value="2">2 Estrellas</option>
                        <option value="3">3 Estrellas</option>
                        <option value="4">4 Estrellas</option>
                        <option value="5">5 Estrellas</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="ubicacion" class="form-label">Ubicación:</label>
                    <input type="text" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="disponibilidad" class="form-label">Disponibilidad:</label>
                    <select id="disponibilidad" name="disponibilidad" class="form-select">
                        <option value="">Seleccione</option>
                        <option value="Disponible">Disponible</option>
                        <option value="No disponible">No disponible</option>
                    </select>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5">
        <h2 class="mb-4">Resultados</h2>
        <table id="hotelesTable" class="table table-bordered table-hover">
            <thead class="table-dark">
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
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#filtroForm').on('submit', function(event) {
            event.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: "{{ route('hotel.index') }}",
                method: "GET",
                data: formData,
                success: function(response) {
                    $('#hotelesTable tbody').empty();

                    if (response.hoteles && response.hoteles.length > 0) {
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
                        $('#hotelesTable tbody').append('<tr><td colspan="6" class="text-center">No se encontraron hoteles.</td></tr>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    alert('Hubo un error al cargar los resultados.');
                }
            });
        });
    });
</script>
@endsection
