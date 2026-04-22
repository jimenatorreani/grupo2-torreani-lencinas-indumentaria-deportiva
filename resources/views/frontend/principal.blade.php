@extends('layouts.plantilla-base')

@section('content')
    {{-- <h3 class="h3principal">Contenido de la página principal</h3> --}}

    {{-- Acá iría el carrousel antes de la galería de productos --}}

        {{--agrego un carrousel con imágenes de ropa deportiva para hombres y mujeres, utilizando el componente Carousel de Bootstrap.
         Cada imagen tiene una descripción alternativa para mejorar la accesibilidad. El carrousel incluye controles para navegar 
         entre las imágenes.--}}
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/ropaHombre1.jpg')}}" class="d-block w-100" alt="Ropa de hombre">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaHombre2.jpg')}}" class="d-block w-100" alt="Ropa de hombre">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaHombre3.jpg')}}" class="d-block w-100" alt="Ropa de hombre">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaMujer1.jpg')}}" class="d-block w-100" alt="Ropa de mujer">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaMujer2.jpg')}}" class="d-block w-100" alt="Ropa de mujer">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaMujer3.jpg')}}" class="d-block w-100" alt="Ropa de mujer">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaHyM.jpg')}}" class="d-block w-100" alt="Ropa de hombre y mujer">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/ropaHyM2.jpg')}}" class="d-block w-100" alt="Ropa de hombre y mujer">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  {{--Mediante css en el archivo public/css/estilos.css, agrego estilos personalizados para el carrousel, como ajustar la altura de las imágenes, 
   agregar un fondo oscuro con opacidad para mejorar la legibilidad de los controles y las descripciones
   y centrar el texto de las descripciones.--}}

<h2 class="mb-5 text-center fw-bold">Productos destacados</h2>

{{-- mi-galeria --}}
<div class="row mi-galeria">

    <div class="col-md-4 mb-4">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto10.jpg') }}">
        </div>
    </div>
    
    <div class="col-md-4 mb-4">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto13.jpg') }}">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto6.jpg') }}">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto4.jpg') }}">
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="producto-img">
            <img src="{{ asset('img/zapatillasnegras.jpg') }}">
        </div>
    </div>

    <div class="col-md-4 mb-4 ">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto9.jpg') }}">
        </div>
    </div>    

</div>


{{-- mi-galeria2 --}}
<div class="row mi-galeria2">

    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="{{ asset('img/fotoProducto10.jpg') }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Producto 1</h5>
                <p class="card-text">$10.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="{{ asset('img/fotoProducto5.jpg') }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Producto 1</h5>
                <p class="card-text">$10.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card h-100">
            <img src="{{ asset('img/fotoProducto7.jpg') }}" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Producto 1</h5>
                <p class="card-text">$10.000</p>
            </div>
        </div>
    </div>

</div>

{{-- mi-galeria3
<div class="col-md-4 mb-4 mi-otra-galeria">
    <div class="card shadow-sm h-100">
        <div class="producto-img">
            <img src="{{ asset('img/fotoProducto9.jpg') }}">
        </div>
        <div class="card-body text-center">
            <h5 class="card-title">Top deportivo</h5>
            <p class="card-text">$12.000</p>
            <a href="#" class="btn btn-dark">Ver producto</a>
        </div>
    </div>
</div>
--}}

@endsection
