@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center text-gray-900">
  <h1>Editar Organizacion</h1>
  <form method="post" class="text-center" action="{{route('org.update', $org->id)}}">
    @method('PUT')
    @csrf
    <div class="form-row">
      <div class="col-lg-6">
        <label>Nombre:</label>
        <input type="text" class="form-control" id="nombreOEA" value="{{$org->name}}" name="nombre">
        <div id="nombreMalOEA">Introduce un nombre valido</div>
        @error('nombre')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col-lg-6">
        <label>Email:</label>
        <input type="email" id="emailOEA" class="form-control" name="email" value="{{$org->email}}">
        <div id="emailMalOEA">Introduce un nombre valido</div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-6">
        <label>Direccion:</label>
        <input type="text" id="direccionOEA" class="form-control" name="direccion" value="{{$org->direccion}}">
        <div id="direccionMalOEA">Introduce un nombre valido</div>
        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col-lg-6">
        <label>Localidad:</label>
        <input type="text" id="localidadOEA" class="form-control" name="localidad" value="{{$org->localidad}}">
        <div id="localidadMalOEA">Introduce un nombre valido</div>
        @error('direccion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-6">
        <label>Provincia:</label>
        <input type="text" id="provinciaOEA" class="form-control" name="provincia" value="{{$org->provincia}}">
        <div id="provinciaMalOEA">Introduce un nombre valido</div>
        @error('provincia')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col-lg-6">
        <label>Pais:</label>
        <input type="text" id="paisOEA" class="form-control" name="pais" value="{{$org->pais}}">
        <div id="paisMalOEA">Introduce un nombre valido</div>
        @error('pais')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-6">
        <label>Telefono:</label>
        <input type="text" id="telefonoOEA" class="form-control" name="telefono" value="{{$org->telefono}}">
        <div id="telefonoMalOEA">Introduce un nombre valido</div>
        @error('telefono')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col-lg-6">
        <label>CIF:</label>
        <input type="text" id="cifOEA" class="form-control" name="CIF" value="{{$org->CIF}}">
        <div id="cifMalOEA">Introduce un nombre valido</div>
        @error('CIF')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-6">
        <label>Horario Apertura:</label>
        <input type="time" class="form-control" name="HApertura" value="{{$org->horarioApertura}}">
        @error('HApertura')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <div class="col-lg-6">
        <label>Horario Cierre:</label>
        <input type="time" class="form-control" name="HCierre" value="{{$org->horarioCierre}}">
        @error('HCierres')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col-lg-6">
        <label>Encargado:</label>
        <select class="custom-select" name="user">
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
        @enderror
      </div>
      <div class="col-lg-6">
        <label>Tipo Organizacion:</label>
        <select class="custom-select" name="tipo">
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
        @enderror
      </div>
    </div>
    <div class="form-row">
      <div class="col custom-file mb-3">
        <label>Imagen:</label>
        <input type="file" class="custom-file text-center" name="img">
        @error('img')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
    </div><br>
    <input class="btn btn-warning text-gray-900" id="submitOEA" disabled type="submit" name="confirmarcambios" value="Confirmar">
  </form>
</div>
<script src="/js/orgAdminEdit.js"></script>
@endsection