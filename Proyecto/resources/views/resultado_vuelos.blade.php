<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Búsqueda de Vuelos Nacionales</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body>
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
                        <button class="btn btn-success btn-sm">Seleccionar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aerolínea B</td>
                    <td>$2,000 MXN</td>
                    <td>02:00 PM</td>
                    <td>04:00 PM</td>
                    <td>Ejecutiva</td>
                    <td>
                        <button class="btn btn-success btn-sm">Seleccionar</button>
                    </td>
                </tr>
                <tr>
                    <td>Aerolínea C</td>
                    <td>$1,800 MXN</td>
                    <td>06:00 PM</td>
                    <td>08:00 PM</td>
                    <td>Primera clase</td>
                    <td>
                        <button class="btn btn-success btn-sm">Seleccionar</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="text-center mt-4">
            <button class="btn btn-primary" onclick="window.location.href='index.html'">
                <i class="fas fa-search"></i> Volver a Buscar Vuelos
            </button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
