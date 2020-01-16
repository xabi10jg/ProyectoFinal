@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center margenAdmin"> 
    <div class="prueba">
          <form method="post" class="text-center" action="{{route('org.store')}}">
            @csrf

            Nombre: <input type="text" name="nombre" value=""><br>
            @error('nombre')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Email: <input type="text" name="email" value=""><br>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror<br>
            Dirección: <input type="text" name="direccion" value=""><br>
            @error('direccion')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Localidad: <input type="text" name="localidad" value=""><br>
            @error('localidad')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Provincia: <input type="text" name="provincia" value=""><br>
            @error('provincia')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            País: <input type="text" name="pais" value=""><br>
            @error('pais')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Teléfono: <input type="text" name="telefono" value=""><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            CIF: <input type="text" name="CIF" value=""><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Horario Apertura: <input type="time" name="HApertura" value=""><br>
            @error('telefono')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                 @enderror<br>
            Horario Cierre: <input type="time" name="HCierre" value=""><br>
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
                  <option value="{{$user->id}}">{{$user->name}}</option>
              @endforeach
            </select>
            @error('user')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
             @enderror<br>
            Tipo Org: <select name="tipo">
              @foreach($tipos as $tipo)
                  <option value="{{$tipo->id}}">{{$tipo->name}}</option>
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
@endsection