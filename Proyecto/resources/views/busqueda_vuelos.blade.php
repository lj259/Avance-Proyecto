<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Vuelos Nacionales</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Interfaz de Búsqueda de Vuelos Nacionales</h2>
        <form id="flightSearchForm" class="bg-light p-4 rounded shadow">
            <div class="form-group">
                <label for="origin">Origen</label>
                <select class="form-control" id="origin" >
                    <option value="" disabled selected>Selecciona tu ciudad de origen</option>
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
                <label for="destination">Destino</label>
                <select class="form-control" id="destination" >
                    <option value="" disabled selected>Selecciona tu ciudad de destino</option>
                    <option value="CDMX">Ciudad de México (CDMX)</option>
                    <option value="GDL">Guadalajara (GDL)</option>
                    <option value="MTY">Monterrey (MTY)</option>
                    <option value="CUN">Cancún (CUN)</option>
                    <option value="PVR">Puerto Vallarta (PVR)</option>
                    <option value="BJX">León (BJX)</option>
                    <option value="SJD">San José del Cabo (SJD)</option>
                </select>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="departureDate">Fecha de Salida</label>
                    <input type="date" class="form-control" id="departureDate" >
                </div>
                <div class="form-group col-md-6">
                    <label for="returnDate">Fecha de Regreso (opcional)</label>
                    <input type="date" class="form-control" id="returnDate">
                </div>
            </div>

            <div class="form-group">
                <label for="passengers">Número de Pasajeros</label>
                <select class="form-control" id="passengers" >
                    <option value="" disabled selected>Selecciona número de pasajeros</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="form-group">
                <label for="class">Clase</label>
                <select class="form-control" id="class" >
                    <option value="" disabled selected>Selecciona clase de vuelo</option>
                    <option value="economy">Económica</option>
                    <option value="business">Ejecutiva</option>
                    <option value="first">Primera clase</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-search"></i> Buscar Vuelos
            </button>
        </form>

        
    </div>

  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
