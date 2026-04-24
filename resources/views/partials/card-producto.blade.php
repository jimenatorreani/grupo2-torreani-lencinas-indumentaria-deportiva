{{--componente reutilizable (card) --}}
<div class="col-md-3 mb-4 mi-CardDelProducto">
    <div class="card h-100 text-center">
        <img src="{{ asset('img/productos/'.$imagen) }}" class="card-img-top">

        <div class="card-body text-center">
            <h5>{{ $nombre }}</h5>
            <p>{{ $precio }}</p>
        </div>
    </div>
</div>
