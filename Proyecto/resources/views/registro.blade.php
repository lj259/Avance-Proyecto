<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registro</title>
    @vite(['resources/js/app.js'])

    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('fondo.jpg'); 
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .registro-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            color: #555;
            font-size: 0.9rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .mensaje-contraseña {
            font-size: 0.8rem;
            color: #666;
            margin-top: 5px;
        }
        button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="registro-container">
        <h2>Registro de Clientes</h2>
        <form action="/registro" method="POST">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="correo">Correo Electronico</label>
            <input type="email" id="correo" name="correo" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>

            <label for="telefono">Telefono</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>

            <label for="contraseña">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" required>
            <div class="mensaje-contraseña">La contraseña debe tener al menos 8 caracteres, incluyendo letras y números.</div>

            <button type="submit">Registrarse</button>
        </form>
    </div>
</body>
</html>