@extends('layouts.Plantilla')
@section('Titulo','Turistas Sin Maps')
@section('Contenido')

<main>
  <!-- Carrusel -->
  <div class="container my-5">
    <h2 class="text-center text-primary mb-4">Explora el Mundo con Nosotros</h2>
    <div id="carouselExampleFade" class="carousel slide carousel-fade shadow">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('imagenes/Hotel1.jpg') }}" class="d-block w-100 rounded" alt="Hotel1">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('imagenes/Hotel2.jpg') }}" class="d-block w-100 rounded" alt="Hotel2">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('imagenes/Hotel3.jpg') }}" class="d-block w-100 rounded" alt="Hotel3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>  
  </div>

  <!-- Hoteles -->
  <div class="container text-center my-5">
    <h3 class="text-primary mb-4">Nuestros Mejores Hoteles</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card shadow h-100">
          <img src="{{ asset('imagenes/Hotel1.jpg') }}" class="card-img-top rounded" alt="Hotel1">
          <div class="card-body">
            <h5 class="card-title text-primary">Hotel de Lujo</h5>
            <p class="card-text">Disfruta de una estancia inolvidable con todas las comodidades que mereces.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow h-100">
          <img src="{{ asset('imagenes/Hotel2.jpg') }}" class="card-img-top rounded" alt="Hotel2">
          <div class="card-body">
            <h5 class="card-title text-primary">Hotel Familiar</h5>
            <p class="card-text">El lugar ideal para pasar tiempo en familia con actividades para todos.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow h-100">
          <img src="{{ asset('imagenes/Hotel3.jpg') }}" class="card-img-top rounded" alt="Hotel3">
          <div class="card-body">
            <h5 class="card-title text-primary">Hotel Económico</h5>
            <p class="card-text">Excelente calidad a un precio accesible. Perfecto para tus aventuras.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Beneficios -->
  <div class="container my-5">
    <h3 class="text-center text-primary mb-4">¿Por Qué Elegirnos?</h3>
    <div class="row text-center">
      <div class="col-md-4">
        <div class="p-4 shadow rounded bg-light">
          <i class="bi bi-star-fill text-primary display-4 mb-3"></i>
          <h5 class="text-primary">Calidad Garantizada</h5>
          <p>Hoteles seleccionados con altos estándares para garantizar tu confort.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 shadow rounded bg-light">
          <i class="bi bi-geo-alt-fill text-primary display-4 mb-3"></i>
          <h5 class="text-primary">Ubicaciones Estratégicas</h5>
          <p>Hoteles en los destinos más populares y atractivos del mundo.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 shadow rounded bg-light">
          <i class="bi bi-wallet2 text-primary display-4 mb-3"></i>
          <h5 class="text-primary">Precios Competitivos</h5>
          <p>Obtén el mejor precio garantizado en cada una de tus reservas.</p>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
