@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="css/login.css">
@stop

@section('content')
<div class="my-login">
	<div class="col-md-8 image-login">
	</div>

	<div class="col-md-4 form-login text-center">
		<div class="logo-login">
			<img src="img/logo.png" alt="Logo Vintage" height="80px">
		</div>
		<form class="form-horizontal" role="form" method="POST" action="/login">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="group">      
				<input type="text" name="email" value="{{ old('email') }}" autocomplete="off">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Usuario</label>
			</div>

			<div class="group">      
				<input type="text" required>
				<input type="text" name="email" value="{{ old('email') }}" autocomplete="off">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Usuario</label>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Contraseña</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary" style="margin-right: 15px;">
						Ingresar
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection
