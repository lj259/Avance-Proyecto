<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Hotel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h1 class="text-center mb-5">Detalles del Hotel</h1>

   
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Hotel ASDFGHJKL</h2>
    </div>
<!-- 
    Carusel de fotos -->
    <div class="mb-5">
        <h4>Fotos del Hotel</h4>
        <div id="carouselFotos" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Foto 1">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Foto 2">
                </div>
                <div class="carousel-item">
                    <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Foto 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFotos" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselFotos" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

    
    <div class="mb-5">
        <h4>Descripcion</h4>
        <p>Hotel para pasar las vacacioenes</p>
    </div>

   
    <div class="mb-5">
        <h4>Opiniones</h4>
        <div class="d-flex justify-content-around">
            <div class="text-center">
                <h5>Limpieza</h5>
                <p>★★★★☆</p>
            </div>
            <div class="text-center">
                <h5>Servicio Personal</h5>
                <p>★★★★☆</p>
            </div>
            <div class="text-center">
                <h5>Confort</h5>
                <p>★★★★☆</p>
            </div>
            <div class="text-center">
                <h5>Servicios</h5>
                <p>★★★★☆</p>
            </div>
            <div class="text-center">
                <h5>Ubicación</h5>
                <p>★★★★☆</p>
            </div>
        </div>
    </div>

    
    <div class="mb-5">
        <h4>Politicas de Cancelacion</h4>
        <p>No reembolsable por habitaciO    n.</p>
    </div>

    
    <div class="mb-5">
        <h4>Opciones de Habitaciones</h4>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Tipo de Habitación</th>
                    <th>Características</th>
                    <th>Precio por Noche</th>
                    <th>Disponibilidad</th>
                    <th>Carrito</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Habitación Estándar</td>
                    <td>Vista al mar, 2 camas, WiFi, Aire Acondicionado, TV</td>
                    <td>$1000</td>
                    <td>Disponible</td>
                    <td><button class="btn btn-primary btn-sm">Añadir al Carrito</button></td>
                </tr>
                <tr>
                    <td>Habitación Deluxe</td>
                    <td>Vista a la montaña, 1 cama King, WiFi, Aire Acondicionado, Jacuzzi</td>
                    <td>$20000</td>
                    <td>No Disponible</td>
                    <td><button class="btn btn-primary btn-sm" disabled>Añadir al Carrito</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
