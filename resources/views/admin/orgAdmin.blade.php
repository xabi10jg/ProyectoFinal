@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Organizaciones</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>CIF</th>
              <th>Email</th>
              <th>Tipo</th>
              <th>Encargado</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Localidad</th>
              <th>Provincia</th>
              <th>Pais</th>
              <th>Horario Cierre</th>
              <th>Horario Apertura</th>
            </tr>
        </thead>
        <tbody>
          @foreach($organizaciones as $org)
          <tr>
            <td>{{$org->name}}</td>
            <td>{{$org->CIF}}</td>
            <td>{{$org->email}}</td>
            <td>{{$org->tipo->name}}</td>
            <td>{{$org->encargado->name}}</td>
            <td>{{$org->telefono}}</td>
            <td>{{$org->direccion}}</td>
            <td>{{$org->localidad}}</td>
            <td>{{$org->provincia}}</td>
            <td>{{$org->pais}}</td>
            <td>{{$org->horarioApertura}}</td>
            <td>{{$org->horarioCierre}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection