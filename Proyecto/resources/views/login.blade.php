<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow-lg" style="width: 400px; border-radius: 10px;">
        <h2 class="text-center mb-4">Inicio de Sesion</h2>
        <form action="/iniciar-sesion" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ingresa tu nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Ingresa tu apellido">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required placeholder="nombre@dominio.com">
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required placeholder="Ingresa tu contraseña">
            </div>
           
            <div class="text-center mb-3">
                <a href="/recuperar-contraseña" class="text-decoration-none">¿Olvidaste tu contraseña?</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
        </form>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>

