@extends('layouts.Plantilla')
@section('Titulo','Interfaz de Búsqueda de Hoteles')
@section('Contenido')

<div class="container mt-5">
    <h2 class="text-center mb-4">Interfaz de Búsqueda de Hoteles</h2>
    <form action="/BuscaHotel" class="bg-light p-4 rounded shadow-sm" method="POST">
    @csrf
        <div class="form-group">
            <label for="destination">Destino</label>
            <input type="text" class="form-control" id="destination" placeholder="Ingresa tu destino" name="txtdestinacion" value="{{old('txtdestinacion')}}">
            <small class="form-text text-danger"><strong>{{$errors->first('txtdestinacion')}}</strong></small>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="checkin">Fecha Check In</label>
                <input type="date" class="form-control" id="checkIn" name="txtcheckin" value="{{old('txtcheckin')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtcheckin')}}</strong></small>
            </div>
            <div class="form-group col-md-6">
                <label for="checkout">Fecha Check Out</label>
                <input type="date" class="form-control" id="checkOut" name="txtcheckout" value="{{old('txtcheckout')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtcheckout')}}</strong></small>
                <div class="text-right">
                    <img src="{{ asset('imagenes/Hotel.jpg') }}" alt="Hotel" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="rooms">Número de Habitaciones</label>
                <input type="number" class="form-control" id="rooms" min="1" name="txthabitacion" value="{{old('txthabitacion')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txthabitacion')}}</strong></small>
            </div>
            <div class="form-group col-md-6">
                <label for="adults">Huéspedes Adultos</label>
                <input type="number" class="form-control" id="adults" min="1" name="txtadultos" value="{{old('txtadultos')}}">
                <small class="form-text text-danger"><strong>{{$errors->first('txtadultos')}}</strong></small>
            </div>
        </div>

        <div class="form-group">
            <label for="children">Huéspedes Niños</label>
            <input type="number" class="form-control" id="children" min="0" name="txtniños" value="{{old('txtniños')}}">
            <small class="form-text text-danger"><strong>{{$errors->first('txtniños')}}</strong></small>
        </div>

        <button type="submit" class="btn btn-primary btn-block mt-3">
            Buscar Hotel
        </button>
    </form>
</div>

@endsection
