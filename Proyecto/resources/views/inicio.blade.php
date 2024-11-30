@extends('layouts.Plantilla')
@section('Titulo','Turistas sin maps')
@section('Contenido')
<main >
  <!-- carrusel -->
  <div class="container my-5">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="..." class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  
  </div>
  <!-- Hoteles -->
  <div class="container text-center my-5">
    <div class="row row-cols-3 justify-content-center">
      <div class="col">
        <!-- LLAMAR EL COMPONENTE CARD -->
      </div>
      <div class="col">2</div>
      <div class="col">3</div>
      <div class="col">1</div>
      <div class="col">2</div>
      <div class="col">3</div>
    </div>
  </div>
  <!-- Beneficios -->
  <div class="container my-5">
    <div class="row">
      <div class="col">1</div>
      <div class="col">2</div>
      <div class="col">3</div>
    </div>
    <div class="row">
      <div class="col">1</div>
      <div class="col">2</div>
      <div class="col">3</div>
    </div>
  </div>

</main>


@endsection