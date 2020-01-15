@extends('layouts.admin')
@section('content')
<div class="col-sm-8 text-left"> 
    <div class="prueba">
      <table id="users" class="col-lg-12 text-center">
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
            <td class="col-md-4"><a href="{{route('FormularioEditar', $user->id)}}">Editar</a></td>
            <td class="col-md-4">
              <button id="EliminarPerfil">
                <a href="{{route('EliminarUsuario', $user->id)}}">Eliminar</a>
              </button>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  <hr>
</div>
@endsection