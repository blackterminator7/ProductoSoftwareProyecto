@extends('layouts.plantillabase')

@section('tittle', 'Crear')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>CREAR REGISTROS</h2>
<form action="/inventarios" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tipo</label>
        <input id="tipo" name="tipo" type="text" class="form-control" tabindex="1" title="Ingrese un tipo de inventario" required>
    </div>
    
    <div class="mb-3">
    <select class="form-control" name="establecimiento_id"  id="establecimiento_id" title="Seleccione un establecimiento" required>
            <option value="" selected disabled>--Seleccione un establecimiento--</option>
        @foreach($establecimientos as $establecimiento)
            <option value="{{$establecimiento->id}}"> {{ $establecimiento->nombre_establecimiento }} </option>
        @endforeach
    </select>
    </div>

    <a href="/inventarios" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>

</form>

@endsection