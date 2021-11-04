@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/inventarios/{{$inventario->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" value="{{$inventario->tipo}}" tabindex="1">
    </div>

    <!--<div class="mb-3">
        <label for="" class="form-label">Establecimiento</label>
        <input id="establecimiento" name="descripcion" type="text" class="form-control" value="{{$inventario->establecimiento}}" tabindex="2">
    </div>-->
    
    <a href="/articulos" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
</form>

@endsection