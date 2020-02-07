@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center text-gray-900">
  <h1>Editar Usuario: {{$user->name}}</h1>
  <form method="post" class="text-center" action="{{route('ConfirmarEdicion', $user->id)}}">
    @csrf
      <div class="form-row">
        <div class="col-lg-4">
          <label>Nombre</label>
          <input type="text" class="form-control" id="nombreUA" name="nombre" value="{{$user->name}}">
          <div id="nombreMalUA">Introduce un nombre valido</div>
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Apellido</label>
          <input type="text" name="apellido" id="apellidoUA" class="form-control" value="{{$user->apellido}}">
          <div id="apellidoMalUA">Introduce un apellido valido</div>
          @error('apellido')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Email</label>
          <input type="text" name="email" id="emailUA" class="form-control" value="{{$user->email}}">
          <div id="emailMalUA">Introduce un email valido</div>
           @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
      </div>
      <div class="form-row">
        <div class="col-lg-4">
          <label>Dirección</label>
          <input type="text" name="direccion" id="direccionUA" value="{{$user->direccion}}" class="form-control">
          <div id="direccionMalUA">Introduce una direccion valida</div>
          @error('direccion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Localidad</label>
          <input type="text" name="localidad" id="localidadUA" value="{{$user->localidad}}" class="form-control">
          <div id="localidadMalUA">Introduce una localidad valida</div>
          @error('localidad')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Provincia</label>
          <input type="text" name="provincia" id="provinciaUA" value="{{$user->provincia}}" class="form-control">
          <div id="provinciaMalUA">Introduce una localidad valida</div>
          @error('provincia')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>       
      </div>
      <div class="form-row">
        <div class="col-lg-4">
          <label>País</label>
          <input type="text" name="pais" id="paisUA" value="{{$user->pais}}" class="form-control">
          <div id="paisMalUA">Introduce un pais valido</div>
          @error('pais')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Teléfono</label>
          <input type="text" name="telefono" id="telefonoUA" value="{{$user->telefono}}" class="form-control">
          <div id="telefonoMalUA">Introduce un telefono valido</div>
          @error('telefono')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col-lg-4">
          <label>Rol</label>
          <select name="rol" class="custom-select">
            @foreach($roles as $rol)
              @if($rol->id === $user->role_id)
                <option value="{{$rol->id}}" selected>{{$rol->rol}}</option>
              @else
                <option value="{{$rol->id}}">{{$rol->rol}}</option>
              @endif
            @endforeach
          </select>
          @error('rol')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
      </div><br>
        <input type="submit" class="btn btn-warning text-gray-900" id="submitUA" disabled name="confirmarcambios" value="Confirmar">
      </form>
      </div>
    </div>
    <script src="/js/editUserAdmin.js"></script>
@endsection