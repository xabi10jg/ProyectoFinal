@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center text-gray-900">
  <h1>Crear Organizacion</h1>
  <form method="post" class="text-center" action="{{route('org.store')}}">
    @csrf
    <div class="form-row">
      <div class="col">
        <label>Nombre:</label>
        <input type="text" class="form-control" id="nombre" placeholder="Introduce un nombre" name="nombre">
        @error('nombre')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Email:</label>
        <input type="email" class="form-control" placeholder="Introduce un email" name="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Direccion:</label>
        <input type="text" class="form-control" placeholder="Introduce una direccion" name="direccion">
        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label>Localidad:</label>
        <input type="text" class="form-control" placeholder="Introduce una localidad" name="localidad">
        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Provincia:</label>
        <input type="text" class="form-control" placeholder="Introduce una provincia" name="provincia">
        @error('provincia')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Pais:</label>
        <input type="text" class="form-control" placeholder="Introduce un pais" name="pais">
        @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label>Telefono:</label>
        <input type="text" class="form-control" placeholder="Introduce un telefono" name="telefono">
        @error('telefono')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>CIF:</label>
        <input type="text" class="form-control" placeholder="Introduce el CIF" name="CIF">
        @error('CIF')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Horario Apertura:</label>
        <input type="time" class="form-control" name="HApertura">
        @error('HApertura')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label>Horario Cierre:</label>
        <input type="time" class="form-control" name="HCierre">
        @error('HCierres')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col custom-file mb-3">
        <label>Imagen:</label>
        <input type="file" class="custom-file text-center" name="img">
        @error('img')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col">
        <label>Encargado:</label>
        <select class="custom-select" name="user">
          @foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
        @error('user')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col">
        <label>Tipo Organizacion:</label>
        <select class="custom-select" name="tipo">
          @foreach($tipos as $tipo)
            <option value="{{$tipo->id}}">{{$tipo->name}}</option>
          @endforeach
        </select>
        @error('tipo')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div><br>
    <input class="btn btn-warning text-gray-900" type="submit" name="confirmarcambios" value="Confirmar">
  </form>
</div>
@endsection