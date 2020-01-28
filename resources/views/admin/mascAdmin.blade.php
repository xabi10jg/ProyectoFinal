@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Mascotas</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>Fecha Nacimiento</th>
              <th>Raza</th>
              <th>Propietario</th>
              @isset($mascota->organizacion->name)
                <th>Organizacion</th>
              @endisset
              <th>Descripcion</th>
              <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
          @foreach($mascotas as $mascota)
          <tr>
            <td>{{$mascota->name}}</td>
            <td>{{$mascota->fecha_nacimiento}}</td>
            <td>{{$mascota->raza}}</td>
            <td>{{$mascota->usuario->name}}</td>
            @isset($mascota->organizacion->name)
              <td>{{$mascota->organizacion->name}}</td>
            @endisset
            <td>{{$mascota->descripcion}}</td>
            <td>{{$mascota->img}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection