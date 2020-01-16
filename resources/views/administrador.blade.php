@extends('layouts.admin')
@section('content')
<div class="col-lg-15 text-center margenAdmin"> 
	<div class="prueba">
		<table class="pruebaMargen">
		<tr>
			<td class="col-lg-3 pruebaPadding">
				<div class="adminCard pruebaMargen2">
	  				<div class="card-body">
	    				<h4 class="card-title">Usuarios Registrados</h4>
	    				<p class="card-text">{{$users->count()}}</p>
	    				<a href="{{route('usersAdmin')}}" class="btn btn-primary">Ver Usuarios</a>
	  				</div>
				</div>
			</td>
			<td class="col-lg-3 pruebaPadding">
				<div class="adminCard pruebaMargen2">
	  				<div class="card-body">
	    				<h4 class="card-title">Masctoas Registradas</h4>
	    				<p class="card-text">{{$mascotas->count()}}</p>
	    				<a href="{{route('mascAdmin')}}" class="btn btn-primary">Ver Mascotas</a>
	  				</div>
				</div>
			</td>
			<td class="col-lg-3 pruebaPadding">
				<div class="adminCard pruebaMargen2">
	  				<div class="card-body">
	    				<h4 class="card-title">Organizaciones Registradas</h4>
	    				<p class="card-text">{{$organizaciones->count()}}</p>
	    				<a href="{{route('orgAdmin')}}" class="btn btn-primary">Ver Organizaciones</a>
	  				</div>
				</div>
			</td>
		</tr>
		</table>
	</div>
	<hr>
</div>
@endsection