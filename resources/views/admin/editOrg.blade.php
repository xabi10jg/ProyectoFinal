@extends('layouts.admin')
@section('content')
  <div class="container-fluid text-center">
    <div class="row content"><br>
      <div class="prueba">
          <form method="post" action="{{route('org.update', $org->id)}}">
            @METHOD('PUT')
            @csrf

            Nombre: <input type="text" name="nombre" value="{{$org->name}}"><br>
            @error('nombre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Email: <input type="text" name="email" value="{{$org->email}}"><br>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Dirección: <input type="text" name="direccion" value="{{$org->direccion}}"><br>
            @error('direccion')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Localidad: <input type="text" name="localidad" value="{{$org->localidad}}"><br>
            @error('localidad')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Provincia: <input type="text" name="provincia" value="{{$org->provincia}}"><br>
            @error('provincia')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            País: <input type="text" name="pais" value="{{$org->pais}}"><br>
            @error('pais')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Teléfono: <input type="text" name="telefono" value="{{$org->telefono}}"><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            CIF: <input type="text" name="CIF" value="{{$org->CIF}}"><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Horario Apertura: <input type="time" name="HApertura" value="{{$org->horarioApertura}}"><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Horario Cierre: <input type="time" name="HCierre" value="{{$org->horarioCierre}}"><br>
            @error('telefono')
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
            Encargado: <select name="user">
              @foreach($users as $user)
                @if($user->id === $org->encargado_id)
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
            Tipo Org: <select name="tipo">
              @foreach($tipos as $tipo)
                @if($tipo->id === $org->tipo_id)
                  <option selected value="{{$tipo->id}}">{{$tipo->name}}</option>
                @else
                  <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                @endif
                  
              @endforeach
            </select>
            @error('tipo')
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