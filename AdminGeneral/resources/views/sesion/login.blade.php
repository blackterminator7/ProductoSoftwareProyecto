@extends('layouts.plantillabase')

@section('tittle', 'Login')

@section('import')
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('contenido')
@section('nav')
    @include('layouts.nav')
@endsection
<div class="global-container">
	<div class="card login-form">
	<div class="card-body">
		<h3 class="card-title text-center">Inicio de sesión</h3>
		<div class="card-text">
			<form>
				<div class="form-group">
					<label for="usuario">Usuario</label>
					<input type="text" class="form-control form-control-sm" id="usuario" aria-describedby="emailHelp">
				</div>
				<div class="form-group">
					<label for="contrasenia">Contraseña</label>
					{{-- <a href="#" style="float:right;font-size:12px;">¿Contraseña olvidada?</a> --}}
					<input type="password" class="form-control form-control-sm" id="contrasenia">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
				
				<div class="sign-up">
					¿No posees una cuenta? <a href="#">Crear una cuenta</a>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
