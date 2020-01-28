@extends('layouts.admin')
@section('content')
<div class="container-lg">
  <div class="row-lg text-center">
    <div class="card col-lg-3 float-left text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Usuarios Registrados</h4>
        <p class="card-text">{{$users->count()}}</p>
        <a href="{{route('usersAdmin')}}" class="btn btn-warning text-gray-900">Ver Usuarios</a>
      </div>
    </div>
    <div class="card col-lg-3 float-left text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Masctoas Registradas</h4>
        <p class="card-text">{{$mascotas->count()}}</p>
        <a href="{{route('mascAdmin')}}" class="btn btn-warning text-gray-900">Ver Mascotas</a>
      </div>
    </div>
    <div class="card col-lg-3 text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Organizaciones Registradas</h4>
        <p class="card-text">{{$organizaciones->count()}}</p>
        <a href="{{route('orgAdmin')}}" class="btn btn-warning text-gray-900">Ver Organizaciones</a>
      </div>
    </div>
    <hr>
  </div>
</div>
@endsection
  