@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Peticiones</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>Email</th>
              <th>CIF</th>
              <th>Tipo ID</th>
              <th>Encargado ID</th>
              <th>Aceptar</th>
              <th>Denegar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($peticiones as $peticion)
            @if($peticion->tipo != null)
              <tr>
                <td>{{$peticion->nombre}}</td>
                <td>{{$peticion->email}}</td>
                <td>{{$peticion->cif}}</td>
                <td>{{$peticion->tipo}}</td>
                <td>{{$peticion->encargado}}</td>
                <td><a class="btn btn-warning text-gray-900" href="{{route('peticion.create', $peticion->id)}}">Aceptar</a></td>
                <td>
                  <button class="btn btn-warning text-gray-900" id="EliminarPerfil">
                    <a class="text-gray-900" href="{{route('peticion.destroy', $peticion->id)}}">Denegar</a>
                  </button>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection