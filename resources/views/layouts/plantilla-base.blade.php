<!DOCTYPE html>
<html>
    <head>
<title>Principal</title>
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
{{-- <link rel="stylesheet" href="/css/estilos.css"> --}}
</head>
<body>

    {{-- NAVBAR --}}
    @include('partials.navbar')

    {{-- HEADER --}}
    @include('partials.header')

    {{-- CONTENIDO DINÁMICO --}}
    <main class="container mt-4">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    @include('partials.footer')


<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>