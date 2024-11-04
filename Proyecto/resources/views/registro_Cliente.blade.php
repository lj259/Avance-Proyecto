<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Clientes</title>
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="container p-4 bg-white rounded shadow" style="max-width: 400px;">
        <h2 class="text-center mb-4">Registro de Clientes</h2>
        <form action="/registro" method="POST">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                <label for="apellido">Apellido</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo Electrónico" required>
                <label for="correo">Correo Electronico</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"  required>
                <label for="telefono">Telefono</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                <label for="contraseña">Contraseña</label>
                <div class="form-text">La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.</div>
            </div>
            <button type="submit" class="btn btn-primary w-100">Registrarse</button>
        </form>
    </div>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
