@extends('layouts.admin')
@section('content')
  <div class="container-fluid text-center">
    <div class="row content"><br>
      <div class="prueba">
        <form method="post" class="text-center" action="{{route('ConfirmarEdicion', $user->id)}}">
        
        @csrf

        Nombre: <input type="text" name="nombre" value="{{$user->name}}"><br>
        @error('nombre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
        Apellido: <input type="text" name="apellido" value="{{$user->apellido}}"><br>
        @error('apellido')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Email: <input type="text" name="email" value="{{$user->email}}"><br>
        @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Dirección: <input type="text" name="direccion" value="{{$user->direccion}}"><br>
        @error('direccion')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Localidad: <input type="text" name="localidad" value="{{$user->localidad}}"><br>
        @error('localidad')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Provincia: <input type="text" name="provincia" value="{{$user->provincia}}"><br>
        @error('provincia')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        País: <input type="text" name="pais" value="{{$user->pais}}"><br>
        @error('pais')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Teléfono: <input type="text" name="telefono" value="{{$user->telefono}}"><br>
        @error('telefono')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
        Rol: <select name="rol">
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
             @enderror<br>
        <input type="submit" name="confirmarcambios" value="Confirmar">


      </form>
      </div>
    </div>
  </div>
@endsection