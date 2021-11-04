@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/inventarios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="1">
    </div>

    <!--div class="mb-3">
        <label for="" class="form-label">Establecimiento</label>
        <input id="establecimiento" name="establecimiento" type="text" class="form-control" tabindex="2">
    </div-->
    
    <a href="/articulos" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>

</form>

@endsection