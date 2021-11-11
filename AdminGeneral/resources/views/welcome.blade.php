@extends('layouts.plantillabase')

@section('tittle', 'Inicio')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
@section('nav')
    @include('layouts.nav')
@endsection
<div class="text-center">
    <h1>Producto de software</h1>
</div>
<div class="container">
    <div class="card">
        <h5 class="card-header">Descripción</h5>
        <div class="card-body">
            <h5 class="card-title aling-center">General</h5>
            <p class="card-text">Página web que proporciona un catalogo de repuestos para vehiculos los
                cuales
                clientes asociados ofrecen para su venta.</p>
        </div>
    </div>
</div>

@endsection
