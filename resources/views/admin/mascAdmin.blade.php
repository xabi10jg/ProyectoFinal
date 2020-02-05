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
              <th>Organizacion</th>
              <th>Descripcion</th>
              <th>Imagen</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($mascotas as $mascota)
          <tr>
            <td>{{$mascota->name}}</td>
            <td>{{$mascota->fecha_nacimiento}}</td>
            <td>{{$mascota->raza}}</td>
            @isset($mascota->usuario->name)
              <td>{{$mascota->usuario->name}}</td>
            @else
              <td>No tiene</td>
            @endisset
            @isset($mascota->organizacion->name)
              <td>{{$mascota->organizacion->name}}</td>
            @else
              <td>No tiene</td>
            @endisset
            @isset($mascota->descripcion)
              <td>{{$mascota->descripcion}}</td>
            @else
              <td>No tiene</td>
            @endisset
            <td>{{$mascota->img}}</td>
            <td><a class="btn btn-warning text-gray-900" href="{{route('mascotas.edit',$mascota->id)}}">Editar</a></td>
            <td>
              <form action="{{route('mascotas.destroy',$mascota->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-warning text-gray-900" type="submit" value="Eliminar">
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection