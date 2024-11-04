<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Hoteles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">
        
        <h1 class="text-center mb-4">Resultados de Hoteles</h1>

        <div class="row">
            
            <div class="col-md-3">
                <h4>Filtros</h4>
                <form>
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
                    <button type="submit" class="btn btn-primary btn-block">Aplicar Filtros</button>
                </form>
            </div>

            
            <div class="col-md-9">
                <div class="hotel-result border p-3 mb-3">
                    <h5>Nombre del Hotel</h5>
                    <p>Ubicación: Ciudad, País</p>
                    <p>Calificación: ★★★★☆</p>
                    <p>Estrellas: 4</p>
                    <p>Precio por Noche: $150</p>
                    <p>Disponibilidad de Habitaciones: Disponible</p>
                    <a href="detalles.html" class="btn btn-outline-primary">Ver Detalles</a>
                </div>

              
                <div class="hotel-result border p-3 mb-3">
                    <h5>Nombre del Hotel 2</h5>
                    <p>Ubicación: Ciudad, País</p>
                    <p>Calificación: ★★★☆☆</p>
                    <p>Estrellas: 3</p>
                    <p>Precio por Noche: $120</p>
                    <p>Disponibilidad de Habitaciones: No Disponible</p>
                    <a href="detalles.html" class="btn btn-outline-primary">Ver Detalles</a>
                </div>
               
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
