<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz de Búsqueda de Hoteles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Interfaz de Busqueda de Hoteles</h2>
        <form id="hotelSearchForm" class="bg-light p-4 rounded shadow">
            <div class="form-group">
                <label for="destination">Destino</label>
                <input type="text" class="form-control" id="destination" placeholder="Ingresa tu destino" name="txtdestinacion">
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="checkin">Fecha Check In</label>
                    <input type="date" class="form-control" id="checkIn" name="txtcheckin">
                </div>
                <div class="form-group col-md-6">
                    <label for="checkout">Fecha Check Out</label>
                    <input type="date" class="form-control" id="checkOut" name="txtcheckout">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rooms">Numero de Habitaciones</label>
                    <input type="number" class="form-control" id="rooms" min="1" name="txthabitacion" >
                </div>
                <div class="form-group col-md-6">
                    <label for="adults">Huespedes Adultos</label>
                    <input type="number" class="form-control" id="adults" min="1" name="txtadultos">
                </div>
            </div>

            <div class="form-group">
                <label for="children">Huespedes Niños</label>
                <input type="number" class="form-control" id="children" min="0" name="txtniños">
            </div>

            <button type="submit" class="btn btn-primary btn-block">
                Buscar Hotel
            </button>
        </form>

        <div id="errorMessage" class="alert alert-danger mt-3 d-none" role="alert"></div>
        <div id="successMessage" class="alert alert-success mt-3 d-none" role="alert">Busqueda realizada con exito.</div>
    </div>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
