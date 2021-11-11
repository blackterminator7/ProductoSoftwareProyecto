@extends('layouts.plantillabase')

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/inventarios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="1">
    </div>
    
    <div class="mb-3">
    <select class="form-control" name="establecimiento_id"  id="establecimiento_id">
        @foreach($establecimientos as $establecimiento)
            <option value="{{$establecimiento->id}}"> {{ $establecimiento->nombre }} </option>
        @endforeach
    </select>
    </div>

    <a href="/inventarios" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>

</form>

@endsection