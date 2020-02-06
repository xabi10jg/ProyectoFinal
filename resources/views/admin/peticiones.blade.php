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
                  <form style="display:inline" action="{{route('peticion.destroy', $peticion->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-warning text-gray-900" type="submit">@lang('Eliminar')</button></form>
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