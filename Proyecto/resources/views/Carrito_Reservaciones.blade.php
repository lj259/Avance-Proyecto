<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Reservaciones</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-5">Carrito de Reservaciones</h1>

  <!-- vuelo -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h4>Vuelo</h4>
        </div>
        <div class="card-body">
            <h5>Información del Vuelo Seleccionado</h5>
            <p>Origen: <span id="vueloOrigen"></span></p>
            <p>Destino: <span id="vueloDestino"></span></p>
            <p>Fecha de salida: <span id="fechaSalida"></span></p>
            <p>Fecha de regreso: <span id="fechaRegreso"></span></p>
            <p>Clase: <span id="claseVuelo"></span></p>
        </div>
    </div>

    <!-- Hotel -->
    <div class="card mb-4">
        <div class="card-header bg-secondary text-white">
            <h4>Hotel</h4>
        </div>
        <div class="card-body">
            <h5>Información del Hotel Seleccionado</h5>
            <p>Hotel: <span id="nombreHotel"></span></p>
            <p>Tipo de habitación: <span id="tipoHabitacion"></span></p>
            <p>Check-in: <span id="fechaCheckIn"></span></p>
            <p>Check-out: <span id="fechaCheckOut"></span></p>
            <p>Servicios: <span id="serviciosHotel"></span></p>
        </div>
    </div>

    <!-- Calculo de Precio -->
    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <h4>Cálculo de Precios</h4>
        </div>
        <div class="card-body">
            <!-- Precio  Vuelo -->
            <h5>Precio del Vuelo</h5>
            <div class="form-group">
                <label for="numPasajeros">Número de Pasajeros:</label>
                <input type="number" class="form-control" id="numPasajeros" placeholder="Ingresa número de pasajeros" min="1">
            </div>
            <p>Precio por pasajero: $100 USD</p>
            <p><strong>Total Vuelo:</strong> $<span id="totalVuelo">0</span> USD</p>

            <!-- Precio  Hotel -->
            <h5 class="mt-4">Precio del Hotel</h5>
            <div class="form-group">
                <label for="numNoches">Número de Noches:</label>
                <input type="number" class="form-control" id="numNoches" placeholder="Ingresa el número de noches" min="1">
            </div>
            <p>Precio por noche: $80 USD</p>
            <p><strong>Total Hotel:</strong> $<span id="totalHotel">0</span> USD</p>
        </div>
    </div>

   
    <div class="text-center mt-5">
        <button class="btn btn-success btn-lg" onclick="confirmarReservacion()">Confirmar Reservacion</button>
    </div>
</div>

<!-- <script>
    // Calcula el precio total del vuelo y el hotel en función del número de pasajeros y noches
    document.getElementById('numPasajeros').addEventListener('input', calcularTotalVuelo);
    document.getElementById('numNoches').addEventListener('input', calcularTotalHotel);

    function calcularTotalVuelo() {
        const precioPorPasajero = 100;
        const numPasajeros = document.getElementById('numPasajeros').value;
        const totalVuelo = numPasajeros * precioPorPasajero;
        document.getElementById('totalVuelo').innerText = totalVuelo || 0;
    }

    function calcularTotalHotel() {
        const precioPorNoche = 80;
        const numNoches = document.getElementById('numNoches').value;
        const totalHotel = numNoches * precioPorNoche;
        document.getElementById('totalHotel').innerText = totalHotel || 0;
    }

    

    // Aquí podrías cargar datos de otras interfaces y asignarlos a los elementos de texto
    function cargarDatosDeSeleccion() {
        document.getElementById("vueloOrigen").innerText = "";  // Asigna datos reales aquí
        document.getElementById("vueloDestino").innerText = "";  // Asigna datos reales aquí
        document.getElementById("fechaSalida").innerText = "";   // Asigna datos reales aquí
        document.getElementById("fechaRegreso").innerText = "";  // Asigna datos reales aquí
        document.getElementById("claseVuelo").innerText = "";    // Asigna datos reales aquí

        document.getElementById("nombreHotel").innerText = "";    // Asigna datos reales aquí
        document.getElementById("tipoHabitacion").innerText = ""; // Asigna datos reales aquí
        document.getElementById("fechaCheckIn").innerText = "";   // Asigna datos reales aquí
        document.getElementById("fechaCheckOut").innerText = "";  // Asigna datos reales aquí
        document.getElementById("serviciosHotel").innerText = ""; // Asigna datos reales aquí
    }

   
    window.onload = cargarDatosDeSeleccion;
</script> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
