@extends('layouts.plantilla-base')

@section('content')
    {{-- <h3 class="h3principal">Contenido de la página principal</h3> --}}

    {{-- Acá iría el carrousel antes de la galería de productos --}}

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
