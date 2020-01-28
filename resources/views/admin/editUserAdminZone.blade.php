@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center text-gray-900">
  <h1>Editar Usuario: {{$user->name}}</h1>
  <form method="post" class="text-center" action="{{route('ConfirmarEdicion', $user->id)}}">
    @csrf
      <div class="form-row">
        <div class="col">
          <label>Nombre</label>
          <input type="text" class="form-control" id="nombre" placeholder="Introduce un nombre" name="nombre" value="{{$user->name}}">
          @error('nombre')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
          <label>Apellido</label>
          <input type="text" name="apellido" class="form-control" value="{{$user->apellido}}" placeholder="Introduce un apellido">
          @error('apellido')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="Introduce un email">
           @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <label>Dirección</label>
          <input type="text" name="direccion" value="{{$user->direccion}}" placeholder="Introduce una dirección" class="form-control">
          @error('direccion')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
          <label>Localidad</label>
          <input type="text" name="localidad" value="{{$user->localidad}}" placeholder="Introduce una localidad" class="form-control">
          @error('localidad')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
          <label>Provincia</label>
          <input type="text" name="provincia" value="{{$user->provincia}}" placeholder="Introduce una provincia" class="form-control">
          @error('provincia')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>       
      </div>
      <div class="form-row">
        <div class="col">
          <label>País</label>
          <input type="text" name="pais" value="{{$user->pais}}" placeholder="Introduce un pais" class="form-control">
          @error('pais')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
          <label>Teléfono</label>
          <input type="text" name="telefono" value="{{$user->telefono}}" placeholder="Introduce un telefono" class="form-control">
          @error('telefono')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="col">
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
        <input type="submit" class="btn btn-warning text-gray-900" name="confirmarcambios" value="Confirmar">
      </form>
      </div>
    </div>
@endsection