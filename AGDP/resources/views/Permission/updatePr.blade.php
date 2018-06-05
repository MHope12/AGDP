@extends('layouts.app')

@section('content')

<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-65 p-b-10">
			<form class="login100-form validate-form" method="POST"	action="{{ route('updatePr', [$permiss->idPermission]) }}">
				
				{{ method_field('PUT')}}
				{{ csrf_field() }}
				
				<span class="login100-form-title p-b-45">
					Actualizar Rol de Usuario
				</span>
					
				<div class="form-control">

					<div class="wrap-input100 validate-input m-t-6">
						<input class="input100" type="text" name="namePermission" value="{{ $permiss->namePermission }}" required>
					</div>

					<div class="container-login100-form-btn">
						<button class="btn btn-warning">Guardar</button>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<a href="{{ route('permission.listPr')}}" class="btn btn-danger">Cancelar</a>
					</div>
					
					<div class="container-login100-form-btn">
						<a href="{{ route('permission.listPr')}}" class="btn btn-primary">Regresar a la Lista</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>

@endsection