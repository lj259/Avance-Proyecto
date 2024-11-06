@extends('layouts.Plantilla')
@section('Titulo','Resultados de Búsqueda de Vuelos Nacionales')
@section('Contenido')


    <div class="container mt-5">
        <h2 class="text-center">Resultados de Búsqueda de Vuelos Nacionales</h2>

        <div class="bg-light p-4 rounded shadow">
            <h5>Resultados para:</h5>
            <p><strong>Origen:</strong> <span id="resultOrigin"></span></p>
            <p><strong>Destino:</strong> <span id="resultDestination"></span></p>
            <p><strong>Fecha de Salida:</strong> <span id="resultDepartureDate"></span></p>
            <p><strong>Fecha de Regreso:</strong> <span id="resultReturnDate"></span></p>
            <p><strong>Número de Pasajeros:</strong> <span id="resultPassengers"></span></p>
            <p><strong>Clase:</strong> <span id="resultClass"></span></p>
        </div>

        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Aerolínea</th>
                    <th>Precio</th>
                    <th>Horario de Salida</th>
                    <th>Horario de Llegada</th>
                    <th>Clase</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Aerolínea A</td>
                    <td>$1,500 MXN</td>
                    <td>10:00 AM</td>
                    <td>12:00 PM</td>
                    <td>Económica</td>
                    <td>
                        <a href="{{route('rutareservacion')}}" class="btn btn-success btn-sm">Seleccionar</a>
                    </td>
                </tr>
                <tr>
                    <td>Aerolínea B</td>
                    <td>$2,000 MXN</td>
                    <td>02:00 PM</td>
                    <td>04:00 PM</td>
                    <td>Ejecutiva</td>
                    <td>
                        <a href="{{route('rutareservacion')}}" class="btn btn-success btn-sm">Seleccionar</a>
                    </td>
                </tr>
                <tr>
                    <td>Aerolínea C</td>
                    <td>$1,800 MXN</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>Primera clase</td>
                    <td>
                        <a href="{{route('rutareservacion')}}" class="btn btn-success btn-sm">Seleccionar</a>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <a class="btn btn-primary" href="{{route('rutabuscavuelos')}}">
                <i class="fas fa-search"></i> Volver a Buscar Vuelos
            </a>
        </div>
    </div>
@endsection