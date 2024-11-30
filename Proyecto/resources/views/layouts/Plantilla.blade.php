<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>@yield('Titulo')</title>
</head>
<body>
    <!--Inicia Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <span class="navbar-toggler-icon">icono</span>
                        <a href="{{route('rutabuscahoteles')}}" class="nav-link" aria-current="page">Hoteles</a>
                    </li>
                    <li class="nav-item">
                        <span class="navbar-toggler-icon">icono</span>
                        <a href="#" class="nav-link" aria-current="page">Vuelos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" aria-current="page">carrito</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('usuario.create')}}" class="nav-link" aria-current="page">Registro Usuarios</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav">
                        <div  class="bg-primary rounded-circle border d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; overflow: hidden;">
                            <img src="..." alt="Perfil" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <li class="nav-item">
                            <a href="#" class="nav-link" aria-current="page">Registro Usuarios</a>
                        </li>
                    </ul>
                    
                </div>
        </div>

    </nav>
    <!--Termina Navbar-->
    @session('Exito')
    <x-Alerta texto="{{$value}}" icono="success"></x-Alerta>
    @endsession

    @yield('Contenido')

    <!-- footer -->

</body>
</html>