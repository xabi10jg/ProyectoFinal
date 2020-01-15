@extends('layouts.admin')
@section('content')
  <div class="container-fluid text-center">
    <div class="row content"><br>
        <div class="prueba">
          <form method="post" class="col-lg-8 text-center" action="{{route('mascotas.update',$mascota->id)}}">
            @method('PUT')
            @csrf

            Nombre: <input type="text" name="nombre" value="{{$mascota->name}}"><br>
            @error('nombre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Fecha Nacimiento: <input type="date" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}"><br>
            @error('fecha_nacimiento')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Raza: <input type="text" name="raza" value="{{$mascota->raza}}"><br>
            @error('raza')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Descripcion: <input type="text" name="descripcion" value="{{$mascota->descripcion}}"><br>
            @error('descripcion')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Propietario: <select name="user">
                <option hidden selected value="null">Sin Propietario</option>
                <option value="null">Sin Propietario</option>
              @foreach($users as $user)s
                @if($user->id === $mascota->propietario)
                  <option selected value="{{$user->id}}">{{$user->name}}</option>
                @else
                  <option value="{{$user->id}}">{{$user->name}}</option>
                @endif
              @endforeach
            </select>
            @error('user')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
            Organizacion: <select name="org">
              <option hidden selected value="null">nada</option>
              <option value="null">Sin Organizacion</option>
              @foreach($orgs as $org)
                @if($org->id === $mascota->organizacion_id)
                  <option selected value="{{$org->id}}">{{$org->name}}</option>
                @else
                  <option value="{{$org->id}}">{{$org->name}}</option>
                @endif
              @endforeach
            </select>
            @error('org')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
            Imagen: <input class="file" type="file" name="img"><br>
            @error('img')
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