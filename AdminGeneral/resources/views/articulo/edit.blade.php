@extends('layouts.plantillabase')

@section('tittle', 'Editar')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>EDITAR REGISTROS DE RESPUESTOS</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$articulo->nombre}}" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}" tabindex="4">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" value="{{$articulo->marca}}" tabindex="5">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Imagen</label>
        <input id="imagen" name="imagen" type="text" class="form-control" value="{{$articulo->imagen}}" tabindex="6">
    </div>
    <!-- Aqui debe ser un input de tipo file, en donde lo que se guardara en la BD es la
        direccion fisica de la imagen, en donde en el controlador tiene que guardar el archivo
        subido (imagen) en lo que seria el servidor, cree una carpeta para mayor orden -->

    <div class="mb-3">
        <label for="" class="form-label">Descuento</label>
        <input id="descuento" name="descuento" type="number" class="form-control" value="{{$articulo->descuento}}" tabindex="7">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Empresa Proveedora</label>
        <input id="empresaProveedora" name="empresaProveedora" type="text" class="form-control" value="{{$articulo->empresaProveedora}}" tabindex="8">
    </div>
       

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
