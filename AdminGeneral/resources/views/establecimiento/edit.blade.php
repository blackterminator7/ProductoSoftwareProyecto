@extends('layouts.plantillabase')

@section('contenido')
<h2>EDITAR REGISTROS</h2>
<form action="/establecimientos/{{$establecimiento->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{$establecimiento->nombre}}" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" value="{{$establecimiento->telefono}}" tabindex="2">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Encargado</label>
        <input id="encargado" name="encargado" type="text" class="form-control" value="{{$establecimiento->encargado}}" tabindex="3">
    </div> 
    
    <!--<div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" value="{{$establecimiento->direccion}}" tabindex="4">
    </div>-->

    <a href="/establecimientos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection