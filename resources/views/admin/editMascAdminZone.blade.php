@extends('layouts.admin')
@section('content')
<div class="col-lg-10 text-center text-gray-900">
  <h1>Editar mascota: {{$mascota->name}}</h1>
  <form method="post" class="text-center" action="{{route('mascotas.update',$mascota->id)}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf

  <div class="form-row">
    <div class="col-lg-6">
      <label>Nombre</label>
      <input type="text" class="form-control" id="nombreMA" placeholder="Introduce un nombre" name="nombre" value="{{$mascota->name}}">
      <div id="nombreMalMA">Introduce un nombre valido</div>
      @error('nombre')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="col-lg-6">
      <label>Fecha Nacimiento:</label>
      <input type="date" class="form-control" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}">
      @error('nombre')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-lg-6">
      <label>Raza:</label>
      <input type="text" class="form-control" id="razaMA" placeholder="Introduce una raza" name="raza" value="{{$mascota->raza}}">
      <div id="razaMalMA">Introduce una raza valida</div>
      @error('raza')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
    <div class="col-lg-6">
      <label>Descripcion:</label>
      <input type="text" id="descripcionMA" name="descripcion" class="form-control" placeholder="Introduce una descripcion" value="{{$mascota->descripcion}}">
      <div id="descMalMA">Introduce una descripcion valida</div>
      @error('descripcion')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>
  </div>
  <div class="form-row">
    <div class="col-lg-6">
      <label>Propietario:</label>
      <select class="custom-select" name="user">
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
      @enderror
    </div>
    <div class="col-lg-6">
      <label>Organizacion:</label>
      <select class="custom-select" name="org">
        <option hidden selected value="null">Sin Organizacion</option>
        <option value="null">Sin Organizacion</option>
        @foreach($orgs as $org)
          @if($org->id === $mascota->organizacion_id)
            <option selected value="{{$org->id}}">{{$org->name}}</option>
          @else
            <option value="{{$org->id}}">{{$org->name}}</option>
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
    <dir class="col">
      <label>Imagen</label>
      <input type="file" class="custom-file text-center" name="img">
      @error('img')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror<br>
    </dir>
  </div>
    <input type="submit" class="btn btn-warning text-gray-900" name="confirmarcambios" value="Confirmar">
  </form>
</div>
@endsection