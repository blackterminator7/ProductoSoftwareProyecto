@extends('layouts.plantillabase')

@section('tittle', 'Editar')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
@endsection

@section('contenido')
<h2>EDITAR REGISTROS DE RESPUESTOS</h2>

<form action="/articulos/{{$articulo->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   
         <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$articulo->nombre}}" title="Por favor ingrese el nombre del repuesto" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2" value="{{$articulo->descripcion}}" title="Por favor ingrese la descripcion del repuesto" required>
    </div>

   <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}" tabindex="3" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="4" value="{{$articulo->cantidad}}" title="Por favor ingrese la cantidad de repuestos" required>
    </div> 
    
    <div class="mb-3">
        <label for="" class="form-label">Marca</label>
        <input id="marca" name="marca" type="text" class="form-control" tabindex="5" value="{{$articulo->marca}}" title="Por favor ingrese la marca del repuesto" required>
    </div>
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input id="imagen" name="imagen" type="file" class="form-control" tabindex="6" value="{{$articulo->imagen}}" accept="image/*">
        @error('imagen')
       Ingrese una imagen
        @enderror
    </div> 
    
    <div class="mb-3">
        <label for="" class="form-label">Descuento</label>
        <input id="descuento" name="descuento" type="number" class="form-control" tabindex="7" value="{{$articulo->descuento}}" title="Ingrese el descuento, sino posee descuento ingrese 0" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Empresa Proveedora</label>
        <input id="empresaProveedora" name="empresaProveedora" type="text" class="form-control" tabindex="8" value="{{$articulo->empresaProveedora}}" title="Por favor ingrese el nombre de la empresa Proveedora" required>
    </div>
    
    <div class="mb-3">
        <label for="" class="form-label">Inventario</label>
        <select class="form-control" name="inventario_id"  id="inventario_id">
            @foreach($inventario as $invent)
                <option value="{{$invent->id}}"> {{ $invent->tipo }} </option>
            @endforeach
        </select>
    </div>
    

   
    

   

    <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection
