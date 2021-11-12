@extends('layouts.plantillabase')

@section('tittle', 'Crear')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>CREAR REGISTROS DE REPUESTOS</h2>
<form action="/articulos" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="4">
    </div> 
    
    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="5">
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" tabindex="6" accept="image/*">
    </div> 
    
    <div class="mb-3">
        <label for="" class="form-label">Descuento</label>
        <input id="descuento" name="descuento" type="number" class="form-control" tabindex="7">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Empresa Proveedora</label>
        <input id="empresaProveedora" name="empresaProveedora" type="text" class="form-control" tabindex="8">
    </div>

    <a href="/articulos" class="btn btn-secondary" tabindex="9">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="10">Guardar</button>

</form>

@endsection
