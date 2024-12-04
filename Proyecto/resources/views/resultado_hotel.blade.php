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
                <div class="mb-3">
                    <label for="destino_id" class="form-label">Origen</label>
                    <select name="destino_id" class="form-control">
                        <option>Selecciona una ciudad</option>
                        @isset($destinos)
                            @foreach($destinos as $destino)
                            <option value="{{$destino->id}}">{{$destino->nombre}}</option>
                            @endforeach
                        @endisset
                    </select>
                    <small class="form-text text-danger"><strong>{{$errors->first('destino_id')}}</strong></small>
                </div>
                
                <div class="col-md-6">
                    <label for="precio" class="form-label">Precio máximo:</label>
                    <input type="text" id="precio" name="precio" class="form-control">
                    <small class="form-text text-danger"><strong>{{$errors->first('precio')}}</strong></small>
                </div>
                
                <div class="col-md-6">
                    <label for="calificacion" class="form-label">Categoría:</label>
                    <select id="calificacion" name="calificacion" class="form-select">
                        <option value="0">Seleccione</option>
                        <option value="1">1 Estrella</option>
                        <option value="2">2 Estrellas</option>
                        <option value="3">3 Estrellas</option>
                        <option value="4">4 Estrellas</option>
                        <option value="5">5 Estrellas</option>
                    </select>
                    <small class="form-text text-danger"><strong>{{$errors->first('calificacion')}}</strong></small>
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
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio por noche</th>
                    <th>Ubicación</th>
                    <th>Disponibilidad</th>
                    <th>Detalles</th>
                </tr>
            </thead>
            <tbody>
                
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
                        response.hoteles.forEach(function(hotel, index) {
                            // Generar ruta de imagen basada en el índice
                            var imageUrl = `/storage/images/Hotel${index + 1}.jpg`;

                            // Crear fila de la tabla
                            var row = `
                                <tr>
                                    <td><img src="${imageUrl}" alt="${hotel.nombre}" class="img-thumbnail" style="width: 100px; height: auto;"></td>
                                    <td>${hotel.nombre}</td>
                                    <td>${hotel.calificacion} Estrellas</td>
                                    <td>${hotel.precio}</td>
                                    <td>${hotel.destino_id}</td>
                                    <td>Disponible</td>
                                    <td>
                                        <a href="/hotel/${hotel.id}/detalles" class="btn btn-link">Ver detalles</a>
                                    </td>
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
