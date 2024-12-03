@extends('layouts.Plantilla')
@section('Titulo','Detalles Hotel')
@section('Contenido')

<div class="container-fluid">
        <div class="row">
            <!-- Contenido principal -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2 class="text-primary my-4">Panel de Gestión</h2>

                <!-- Vuelos -->
                <div id="vuelos" class="mb-5">
                    <h4 class="text-primary mb-3">Gestión de Vuelos</h4>
                    <a href="{{ route('vuelo.create') }}" class="btn btn-success mb-3">Agregar Vuelo</a>

                    @isset($vuelos) 
                        @if ($vuelos->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Vuelo</th>
                                        <th>Origen</th>
                                        <th>Destino</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vuelos as $vuelo)
                                    <tr>
                                        <td>{{ $vuelo->num_vuelo }}</td>
                                        <td>{{ $vuelo->origen_id }}</td>
                                        <td>{{ $vuelo->destino_id }}</td>
                                        <td>
                                            <a href="{{ route('vuelo.edit', $vuelo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('vuelo.destroy', $vuelo->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este vuelo?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No hay vuelos registrados.</p>
                        @endif
                    @endisset
                </div>

                <!-- Hoteles -->
                <div id="hoteles" class="mb-5">
                    <h4 class="text-primary mb-3">Gestión de Hoteles</h4>
                    <a href="{{ route('hotel.create') }}" class="btn btn-success mb-3">Agregar Hotel</a>

                    @isset($hoteles)
                        @if ($hoteles->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Hotel</th>
                                        <th>Ubicación</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hoteles as $hotel)
                                    <tr>
                                        <td>{{ $hotel->nombre }}</td>
                                        <td>{{ $hotel->destino_nombre }}</td>
                                        <td>
                                            <a href="{{ route('hotel.edit', $hotel->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('hotel.destroy', $hotel->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este hotel?');">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No hay hoteles registrados.</p>
                        @endif
                    @endisset
                </div>


                <!-- Destinos -->
                <div id="destinos">
                    <h4 class="text-primary mb-3">Gestión de Destinos</h4>
                    <a href="{{ route('destino.create') }}" class="btn btn-success mb-3">Agregar Destino</a>

                    @isset($destinos) 
                        @if ($destinos->count() > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Destino</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($destinos as $destino)
                                    <tr>
                                        <td>{{ $destino->nombre }}</td>
                                        <td>
                                            <a href="{{ route('destino.edit', $destino->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                            <form action="{{ route('destino.destroy', $destino->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro de eliminar este destino?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No hay destinos registrados.</p>
                        @endif
                    @endisset
                </div>
            </main>
        </div>
    </div>




@endsection