@extends('layouts.admin')
@section('content')
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="{{route('org.create')}}">Crear Organizacion</a></p>
      <p id="usu"><a>Usuarios</a></p>
      <p id="masc"><a>Mascotas</a></p>
      <p id="hot"><a>Hoteles</a></p>
      <p id="ref"><a>Refugios</a></p>
      <p id="vet"><a>Veterinarios</a></p>
      <p id="aco"><a>Centros de Acogida</a></p>
      <p id="pro"><a>Protectoras</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Esta es la vista de administracion</h1>
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
        <table id="mascotas" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Raza</th>
            <th class="col-md-4 text-center">@lang('Propietario')</th>
          </tr>
          @foreach($mascotas as $mascota)
            <tr>
              <td class="col-md-4 text-center">{{$mascota->name}}</td>
              <td class="col-md-4 text-center">{{$mascota->raza}}</td>
              <td class="col-md-4 text-center">{{$mascota->usuario->name}}</td>
              <td class="col-md-4"><a href="{{route('mascotas.edit',$mascota->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('mascotas.destroy',$mascota->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
          @endforeach
        </table>
        <table id="hoteles" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Email</th>
            <th class="col-md-4 text-center">@lang('Tipo')</th>
          </tr>
          @foreach($organizaciones as $org)
            @if($org->tipo_id === 1)
            <tr>
              <td class="col-md-4">{{$org->name}}</td>
              <td class="col-md-4">{{$org->email}}</td>
              <td class="col-md-4">{{$org->tipo->name}}</td>
              <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('org.destroy',$org->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endif
          @endforeach
        </table>
        <table id="refugios" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Email</th>
            <th class="col-md-4 text-center">@lang('Tipo')</th>
          </tr>
          @foreach($organizaciones as $org)
            @if($org->tipo_id === 2)
            <tr>
              <td class="col-md-4">{{$org->name}}</td>
              <td class="col-md-4">{{$org->email}}</td>
              <td class="col-md-4">{{$org->tipo->name}}</td>
              <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('org.destroy',$org->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endif
          @endforeach
          <table id="veterinarios" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Email</th>
            <th class="col-md-4 text-center">@lang('Tipo')</th>
          </tr>
          @foreach($organizaciones as $org)
            @if($org->tipo_id === 3)
            <tr>
              <td class="col-md-4">{{$org->name}}</td>
              <td class="col-md-4">{{$org->email}}</td>
              <td class="col-md-4">{{$org->tipo->name}}</td>
              <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('org.destroy',$org->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endif
          @endforeach
          <table id="centros" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Email</th>
            <th class="col-md-4 text-center">@lang('Tipo')</th>
          </tr>
          @foreach($organizaciones as $org)
            @if($org->tipo_id === 4)
            <tr>
              <td class="col-md-4">{{$org->name}}</td>
              <td class="col-md-4">{{$org->email}}</td>
              <td class="col-md-4">{{$org->tipo->name}}</td>
              <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('org.destroy',$org->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endif
          @endforeach
          <table id="protectoras" class="col-lg-12 text-center">
          <tr>
            <th class="col-md-4 text-center">@lang('Nombre')</th>
            <th class="col-md-4 text-center">Email</th>
            <th class="col-md-4 text-center">@lang('Tipo')</th>
          </tr>
          @foreach($organizaciones as $org)
            @if($org->tipo_id === 5)
            <tr>
              <td class="col-md-4">{{$org->name}}</td>
              <td class="col-md-4">{{$org->email}}</td>
              <td class="col-md-4">{{$org->tipo->name}}</td>
              <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
              <td class="col-md">
                <form action="{{route('org.destroy',$org->id)}}" method="post">
                  @method('DELETE')
                  @csrf
                  <input type="submit" value="Eliminar">
                </form>
              </td>
            </tr>
            @endif
          @endforeach
      </div>
      <hr>
    </div>
  </div>
</div>
@endsection