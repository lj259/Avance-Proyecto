@extends('layouts.Plantilla')
@section('Titulo','Hoteles')
@section('Contenido')

@session('Filtros')
<x-Alerta texto="{{$value}}" icono="info"></x-Alerta>
@endsession

    <div class="container mt-4">
        
        <h1 class="text-center mb-4">Resultados de Hoteles</h1>

        <div class="row">
            
            <div class="col-md-3">
                <h4>Filtros</h4>
                <form action="/resultado/filtro" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Categoría (Estrellas)</label>
                        <select class="form-control">
                            <option>1 Estrella</option>
                            <option>2 Estrellas</option>
                            <option>3 Estrellas</option>
                            <option>4 Estrellas</option>
                            <option>5 Estrellas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Rango de Precio Máximo</label>
                        <input type="number" class="form-control" placeholder="$">
                    </div>
                    <div class="form-group">
                        <label>Distancia (km)</label>
                        <input type="number" class="form-control" placeholder="Distancia en km">
                    </div>
                    <div class="form-group">
                        <label>Servicios</label>
                        <div>
                            <input type="checkbox"> WiFi<br>
                            <input type="checkbox"> Piscina<br>
                            <input type="checkbox"> Gimnasio<br>
                            <input type="checkbox"> Estacionamiento<br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Plan de Alimentos</label>
                        <div>
                            <input type="checkbox"> Desayuno<br>
                            <input type="checkbox"> Media Pensión<br>
                            <input type="checkbox"> Pensión Completa<br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block my-3">Aplicar Filtros</button>
                </form>
            </div>

            
            <div class="col-md-9">
                
                <x-Card
                hotel="Nombre del hotel" 
                ubicacion="Ciudad, País" 
                estrellas="4" 
                precio="150" 
                disponibilidad="Disponible">
                </x-Card>
                
                <x-Card
                hotel="Nombre del hotel2" 
                ubicacion="Ciudad, País" 
                estrellas="3" 
                precio="120" 
                disponibilidad="No Disponible">
                </x-Card>
              
               
            </div>
        </div>
    </div>
@endsection