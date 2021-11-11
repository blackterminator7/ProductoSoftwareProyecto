@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/establecimientos" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefono</label>
        <input id="telefono" name="telefono" type="text" class="form-control" tabindex="2">
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Encargado</label>
        <input id="encargado" name="encargado" type="text" class="form-control" tabindex="3">
    </div> 
    
    <!--div class="mb-3">
        <label for="" class="form-label">Direccion</label>
        <input id="direccion" name="direccion" type="text" class="form-control" tabindex="4">
    </div-->

    <a href="/establecimientos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>

@endsection