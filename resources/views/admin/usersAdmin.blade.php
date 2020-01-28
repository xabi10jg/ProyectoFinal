@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Usuarios</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Rol</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Localidad</th>
              <th>Provincia</th>
              <th>Pais</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->roles->rol}}</td>
            <td>{{$user->telefono}}</td>
            <td>{{$user->direccion}}</td>
            <td>{{$user->localidad}}</td>
            <td>{{$user->provincia}}</td>
            <td>{{$user->pais}}</td>
            <td><a class="btn btn-warning text-gray-900" href="{{route('FormularioEditar', $user->id)}}">Editar</a></td>
            <td>
              <button class="btn btn-warning text-gray-900" id="EliminarPerfil">
                <a class="text-gray-900" href="{{route('EliminarUsuario', $user->id)}}">Eliminar</a>
              </button>
            </td>
          </tr>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection