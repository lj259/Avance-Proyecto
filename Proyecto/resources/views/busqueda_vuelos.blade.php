@extends('layouts.Plantilla')
@section('Titulo','Busqueda de vuelos Nacionales')
@section('Contenido')


    <div class="container mt-5">
        <h2 class="text-center">Interfaz de Búsqueda de Vuelos Nacionales</h2>
        <form action="/BuscaVuelo" id="flightSearchForm" class="bg-light p-4 rounded shadow" method="POST">
            @csrf
            <div class="form-group">
                <label for="origin">Origen</label>
                <select class="form-control" id="origin" name="origin">
                    <option value="{{old('origin')}}" disabled selected>Selecciona tu ciudad de origen</option>
                    <option value="CDMX">Ciudad de México (CDMX)</option>
                    <option value="GDL">Guadalajara (GDL)</option>
                    <option value="MTY">Monterrey (MTY)</option>
                    <option value="CUN">Cancún (CUN)</option>
                    <option value="PVR">Puerto Vallarta (PVR)</option>
                    <option value="BJX">León (BJX)</option>
                    <option value="SJD">San José del Cabo (SJD)</option>
                </select>
                <small class="form-text text-danger"><strong>{{$errors->first('origin')}}</strong></small>

            </div>

            <div class="form-group">
                <label for="destination">Destino</label>
                <select class="form-control" id="destination" name="destination">
                    <option value="{{old('destination')}}" disabled selected>Selecciona tu ciudad de destino</option>
                    <option value="CDMX">Ciudad de México (CDMX)</option>
                    <option value="GDL">Guadalajara (GDL)</option>
                    <option value="MTY">Monterrey (MTY)</option>
                    <option value="CUN">Cancún (CUN)</option>
                    <option value="PVR">Puerto Vallarta (PVR)</option>
                    <option value="BJX">León (BJX)</option>
                    <option value="SJD">San José del Cabo (SJD)</option>
                </select>
                <small class="form-text text-danger"><strong>{{$errors->first('destination')}}</strong></small>

            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="departureDate">Fecha de Salida</label>
                    <input type="date" class="form-control" id="departureDate" name="departureDate" value="{{old('departureDate')}}">
                    <small class="form-text text-danger"><strong>{{$errors->first('departureDate')}}</strong></small>

                </div>
                <div class="form-group col-md-6">
                    <label for="returnDate">Fecha de Regreso (opcional)</label>
                    <input type="date" class="form-control" id="returnDate" name="returnDate" value="{{old('returnDate')}}">
                    <small class="form-text text-danger"><strong>{{$errors->first('returnDate')}}</strong></small>

                </div>
            </div>

            <div class="form-group">
                <label for="passengers">Número de Pasajeros</label>
                <select class="form-control" id="passengers" name="passengers" value="{{old('passengers')}}">
                    <option value="" disabled selected>Selecciona número de pasajeros</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <small class="form-text text-danger"><strong>{{$errors->first('passengers')}}</strong></small>

            </div>

            <div class="form-group">
                <label for="class">Clase</label>
                <select class="form-control" id="class" name="class" value="{{old('class')}}">
                    <option value="" disabled selected>Selecciona clase de vuelo</option>
                    <option value="economy">Económica</option>
                    <option value="business">Ejecutiva</option>
                    <option value="first">Primera clase</option>
                </select>
                <small class="form-text text-danger"><strong>{{$errors->first('class')}}</strong></small>

            </div>

            <button type="submit" class="btn btn-primary btn-block mt-3">
                <i class="fas fa-search"></i> Buscar Vuelos
            </button>
        </form>

        
    </div>

@endsection