
@extends('layouts.Plantilla')
@section('Titulo','Administración de Vuelos')
@section('Contenido')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Administración de Vuelos</h2>
      
        <ul class="nav nav-tabs" id="adminTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="agregar-tab" data-toggle="tab" href="#agregar" role="tab" aria-controls="agregar" aria-selected="true">
                    <i class="fas fa-plus btn-icon"></i> Agregar Vuelo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="editar-tab" data-toggle="tab" href="#editar" role="tab" aria-controls="editar" aria-selected="false">
                    <i class="fas fa-edit btn-icon"></i> Editar Vuelo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="eliminar-tab" data-toggle="tab" href="#eliminar" role="tab" aria-controls="eliminar" aria-selected="false">
                    <i class="fas fa-trash btn-icon"></i> Eliminar Vuelo
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="gestionar-tarifas-tab" data-toggle="tab" href="#gestionar-tarifas" role="tab" aria-controls="gestionar-tarifas" aria-selected="false">
                    <i class="fas fa-dollar-sign btn-icon"></i> Gestionar Tarifas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="gestionar-politicas-tab" data-toggle="tab" href="#gestionar-politicas" role="tab" aria-controls="gestionar-politicas" aria-selected="false">
                    <i class="fas fa-policies btn-icon"></i> Gestionar Políticas
                </a>
            </li>
        </ul>

        
        <div class="tab-content" id="adminTabContent">
            <!-- Agregar Vuelo -->
            <div class="tab-pane fade show active" id="agregar" role="tabpanel" aria-labelledby="agregar-tab">
                <div class="bg-light p-4 rounded shadow mt-4">
                    <h4 class="section-title">Agregar Vuelo</h4>
                    <form id="addFlightForm" action="/admin/Vuelos/agregar" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="addFlightNumber">Número de Vuelo</label>
                            <input type="text" class="form-control" id="addFlightNumber" placeholder="Ejemplo: MX123" required name="numero_vuelo" value="{{old('')}}">
                            <small class="form-text text-danger"><strong>{{$errors->first('numero_vuelo')}}</strong></small>

                        </div>
                        <div class="form-group">
                            <label for="addOrigin">Origen</label>
                            <select class="form-control" id="addOrigin" required name="origen">
                                <option value="" disabled selected>Selecciona el origen</option>
                                <option value="CDMX">Ciudad de México (CDMX)</option>
                                <option value="GDL">Guadalajara (GDL)</option>
                                <option value="MTY">Monterrey (MTY)</option>
                                <option value="CUN">Cancún (CUN)</option>
                                <option value="PVR">Puerto Vallarta (PVR)</option>
                                <option value="BJX">León (BJX)</option>
                                <option value="SJD">San José del Cabo (SJD)</option>
                            </select>
                            <small class="form-text text-danger"><strong>{{$errors->first('origen')}}</strong></small>
                        </div>
                        <div class="form-group">
                            <label for="addDestination">Destino</label>
                            <select class="form-control" id="addDestination" required name="destino">
                                <option value="" disabled selected>Selecciona el destino</option>
                                <option value="CDMX">Ciudad de México (CDMX)</option>
                                <option value="GDL">Guadalajara (GDL)</option>
                                <option value="MTY">Monterrey (MTY)</option>
                                <option value="CUN">Cancún (CUN)</option>
                                <option value="PVR">Puerto Vallarta (PVR)</option>
                                <option value="BJX">León (BJX)</option>
                                <option value="SJD">San José del Cabo (SJD)</option>
                            </select>
                            <small class="form-text text-danger"><strong>{{$errors->first('destino')}}</strong></small>
                        </div>
                        <div class="form-group">
                            <label for="addDepartureDate">Fecha de Salida</label>
                            <input type="date" class="form-control" id="addDepartureDate" required name="fecha_salida">
                            <small class="form-text text-danger"><strong>{{$errors->first('fecha_salida')}}</strong></small>
                        </div>
                        <div class="form-group">
                            <label for="addFare">Tarifa</label>
                            <input type="number" class="form-control" id="addFare" placeholder="Ingresa la tarifa del vuelo" min="0" required name="tarifa">
                            <small class="form-text text-danger"><strong>{{$errors->first('tarifa')}}</strong></small>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">
                            <i class="fas fa-plus btn-icon"></i> Agregar Vuelo
                        </button>
                    </form>
                </div>
            </div>

            <!-- Editar Vuelo -->
            <div class="tab-pane fade" id="editar" role="tabpanel" aria-labelledby="editar-tab">
                <div class="bg-light p-4 rounded shadow mt-4">
                    <h4 class="section-title">Editar Vuelo</h4>
                    <form id="editFlightForm">
                        <div class="form-group">
                            <label for="editFlightNumber">Número de Vuelo</label>
                            <input type="text" class="form-control" id="editFlightNumber" placeholder="Ejemplo: MX123" required>
                        </div>
                        <div class="form-group">
                            <label for="editOrigin">Origen</label>
                            <select class="form-control" id="editOrigin" required>
                                <option value="" disabled selected>Selecciona el origen</option>
                                <option value="CDMX">Ciudad de México (CDMX)</option>
                                <option value="GDL">Guadalajara (GDL)</option>
                                <option value="MTY">Monterrey (MTY)</option>
                                <option value="CUN">Cancún (CUN)</option>
                                <option value="PVR">Puerto Vallarta (PVR)</option>
                                <option value="BJX">León (BJX)</option>
                                <option value="SJD">San José del Cabo (SJD)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDestination">Destino</label>
                            <select class="form-control" id="editDestination" required>
                                <option value="" disabled selected>Selecciona el destino</option>
                                <option value="CDMX">Ciudad de México (CDMX)</option>
                                <option value="GDL">Guadalajara (GDL)</option>
                                <option value="MTY">Monterrey (MTY)</option>
                                <option value="CUN">Cancún (CUN)</option>
                                <option value="PVR">Puerto Vallarta (PVR)</option>
                                <option value="BJX">León (BJX)</option>
                                <option value="SJD">San José del Cabo (SJD)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="editDepartureDate">Fecha de Salida</label>
                            <input type="date" class="form-control" id="editDepartureDate" required>
                        </div>
                        <div class="form-group">
                            <label for="editFare">Tarifa</label>
                            <input type="number" class="form-control" id="editFare" placeholder="Ingresa la tarifa del vuelo" min="0" required>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block mt-3">
                            <i class="fas fa-edit btn-icon"></i> Editar Vuelo
                        </button>
                    </form>
                </div>
            </div>

            <!-- Eliminar Vuelo -->
            <div class="tab-pane fade" id="eliminar" role="tabpanel" aria-labelledby="eliminar-tab">
                <div class="bg-light p-4 rounded shadow mt-4">
                    <h4 class="section-title">Eliminar Vuelo</h4>
                    <form id="deleteFlightForm">
                        <div class="form-group">
                            <label for="deleteFlightNumber">Número de Vuelo</label>
                            <input type="text" class="form-control" id="deleteFlightNumber" placeholder="Ingresa el número de vuelo a eliminar" required>
                        </div>
                        <button type="submit" class="btn btn-danger btn-block mt-3">
                            <i class="fas fa-trash btn-icon"></i> Eliminar Vuelo
                        </button>
                    </form>
                </div>
            </div>

            <!-- Gestionar Tarifas -->
            <div class="tab-pane fade" id="gestionar-tarifas" role="tabpanel" aria-labelledby="gestionar-tarifas-tab">
                <div class="bg-light p-4 rounded shadow mt-4">
                    <h4 class="section-title">Gestionar Tarifas</h4>
                    <form id="manageFareForm">
                        <div class="form-group">
                            <label for="manageFareFlightNumber">Número de Vuelo</label>
                            <input type="text" class="form-control" id="manageFareFlightNumber" placeholder="Ingresa el número de vuelo" required>
                        </div>
                        <div class="form-group">
                            <label for="newFare">Nueva Tarifa</label>
                            <input type="number" class="form-control" id="newFare" placeholder="Ingresa la nueva tarifa" min="0" required>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-block mt-3">
                            <i class="fas fa-dollar-sign btn-icon"></i> Actualizar Tarifa
                        </button>
                    </form>
                </div>
            </div>

            <!-- Gestionar Políticas de Cancelación -->
            <div class="tab-pane fade" id="gestionar-politicas" role="tabpanel" aria-labelledby="gestionar-politicas-tab">
                <div class="bg-light p-4 rounded shadow mt-4">
                    <h4 class="section-title">Gestionar Políticas de Cancelación</h4>
                    <form id="managePolicyForm">
                        <div class="form-group">
                            <label for="managePolicyFlightNumber">Número de Vuelo</label>
                            <input type="text" class="form-control" id="managePolicyFlightNumber" placeholder="Ingresa el número de vuelo" required>
                        </div>
                        <div class="form-group">
                            <label for="cancellationPolicy">Política de Cancelación</label>
                            <textarea class="form-control" id="cancellationPolicy" rows="3" placeholder="Describe la política de cancelación" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-info btn-block mt-3">
                            <i class="fas fa-policies btn-icon"></i> Actualizar Política
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection