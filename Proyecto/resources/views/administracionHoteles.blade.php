@extends('layouts.Plantilla')
@section('Titulo','Administración de Hoteles')
@section('Contenido')


    <div class="container mt-5">
        <h2 class="text-center">Administración de Hoteles</h2>

        <!-- Pestañas -->
        <ul class="nav nav-tabs" id="adminTabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="true">Agregar Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="edit-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="false">Editar Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="delete-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="delete" aria-selected="false">Eliminar Hotel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="rates-tab" data-toggle="tab" href="#rates" role="tab" aria-controls="rates" aria-selected="false">Gestionar Tarifas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="policies-tab" data-toggle="tab" href="#policies" role="tab" aria-controls="policies" aria-selected="false">Políticas de Cancelación</a>
            </li>
        </ul>
        
        
        <div class="tab-content mt-4" id="adminTabsContent">
            <!-- Agregar Hotel -->
             <form action="/admin/Hotel/agregar" method="POST">
                @csrf
                <div class="tab-pane fade show active" id="add" role="tabpanel" aria-labelledby="add-tab">
                    <div class="bg-light p-4 rounded shadow">
                        <h4>Agregar Hotel</h4>
                        <div class="form-group">
                            <label for="addHotel">Nombre del nuevo hotel</label>
                            <br>
                            <small class="form-text text-muted">{{$errors->first('nombre_hotel')}}</small>
                            <input type="text" class="form-control" id="addHotel" name="nombre_hotel" placeholder="Nombre del nuevo hotel">
                            <small class="form-text text-muted">Permite agregar un nuevo hotel al sistema.</small>
                            <button type="submit" class="btn btn-primary mt-2">
                                <i class="fas fa-plus-circle"></i> Agregar Hotel
                            </button>
                            <a href="/" class="btn btn-secondary mt-2" onclick="exitTab('add')">
                                <i class="fas fa-times"></i> Salir
                            </a>
                        </div>
                    </div>
                </div>
             </form>
            

            <!-- Editar Hotel -->
            <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="edit-tab">
                <div class="bg-light p-4 rounded shadow">
                    <h4>Editar Hotel</h4>
                    <div class="form-group">
                        <label for="editHotel">Nombre del hotel a editar</label>
                        <input type="text" class="form-control" id="editHotel" placeholder="Nombre del hotel a editar">
                        <small class="form-text text-muted">Permite editar la información de un hotel existente.</small>
                        <button type="button" class="btn btn-warning mt-2">
                            <i class="fas fa-edit"></i> Editar Hotel
                        </button>
                        <button type="button" class="btn btn-secondary mt-2" onclick="exitTab('edit')">
                            <i class="fas fa-times"></i> Salir
                        </button>
                    </div>
                </div>
            </div>

            <!-- Eliminar Hotel -->
            <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                <div class="bg-light p-4 rounded shadow">
                    <h4>Eliminar Hotel</h4>
                    <div class="form-group">
                        <label for="deleteHotel">Nombre del hotel a eliminar</label>
                        <input type="text" class="form-control" id="deleteHotel" placeholder="Nombre del hotel a eliminar">
                        <small class="form-text text-muted">Permite eliminar un hotel del sistema.</small>
                        <button type="button" class="btn btn-danger mt-2">
                            <i class="fas fa-trash-alt"></i> Eliminar Hotel
                        </button>
                        <button type="button" class="btn btn-secondary mt-2" onclick="exitTab('delete')">
                            <i class="fas fa-times"></i> Salir
                        </button>
                    </div>
                </div>
            </div>

            <!-- Gestionar Tarifas -->
            <div class="tab-pane fade" id="rates" role="tabpanel" aria-labelledby="rates-tab">
                <div class="bg-light p-4 rounded shadow">
                    <h4>Gestionar Tarifas</h4>
                    <div class="form-group">
                        <label for="manageRates">Nombre del hotel para gestionar tarifas</label>
                        <input type="text" class="form-control" id="manageRates" placeholder="Nombre del hotel para gestionar tarifas">
                        <small class="form-text text-muted">Permite modificar las tarifas del hotel seleccionado.</small>
                        <button type="button" class="btn btn-secondary mt-2">
                            <i class="fas fa-cogs"></i> Gestionar Tarifas
                        </button>
                        <button type="button" class="btn btn-secondary mt-2" onclick="exitTab('rates')">
                            <i class="fas fa-times"></i> Salir
                        </button>
                    </div>
                </div>
            </div>

            <!-- Políticas de Cancelación -->
            <div class="tab-pane fade" id="policies" role="tabpanel" aria-labelledby="policies-tab">
                <div class="bg-light p-4 rounded shadow">
                    <h4>Gestionar Políticas de Cancelación</h4>
                    <div class="form-group">
                        <label for="managePolicies">Nombre del hotel para cambiar políticas</label>
                        <input type="text" class="form-control" id="managePolicies" placeholder="Nombre del hotel para cambiar políticas">
                        <small class="form-text text-muted">Permite cambiar las políticas de cancelación del hotel.</small>
                        <button type="button" class="btn btn-secondary mt-2">
                            <i class="fas fa-file-alt"></i> Gestionar Políticas
                        </button>
                        <button type="button" class="btn btn-secondary mt-2" onclick="exitTab('policies')">
                            <i class="fas fa-times"></i> Salir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection