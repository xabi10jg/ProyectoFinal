@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center margenAdmin"> 
      <table id="users" class="col-lg-12 text-center text-gray-900">
        <tr>
          <th class="col-md-4 text-center">@lang('Nombre')</th>
          <th class="col-md-4 text-center">Email</th>
          <th class="col-md-4 text-center">@lang('Rol')</th>
        </tr>
        @foreach($users as $user)
          <tr>
            <td class="col-md-4 text-center">{{$user->name}}</td>
            <td class="col-md-4 text-center">{{$user->email}}</td>
            <td class="col-md-4 text-center">{{$user->roles->rol}}</td>
            <td class="col-md-4"><a class="text-gray-900" href="{{route('FormularioEditar', $user->id)}}">Editar</a></td>
            <td class="col-md-4">
              <button class="btn btn-warning" id="EliminarPerfil">
                <a class="text-gray-900" href="{{route('EliminarUsuario', $user->id)}}">Eliminar</a>
              </button>
            </td>
          </tr>
        @endforeach
      </table>
  <hr>
</div>
@endsection