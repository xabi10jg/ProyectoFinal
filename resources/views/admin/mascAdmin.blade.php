@extends('layouts.admin')
@section('content')
<div class="col-sm-8 text-center margenAdmin">
    <div class="prueba">
      <table id="mascotas" class="col-lg-12 text-center text-gray-900">
        <tr>
          <th class="col-md-4 text-center">@lang('Nombre')</th>
          <th class="col-md-4 text-center">Raza</th>
          <th class="col-md-4 text-center">@lang('Propietario')</th>
        </tr>
        @foreach($mascotas as $mascota)
          <tr>
            <td class="col-md-4 text-center">{{$mascota->name}}</td>
            <td class="col-md-4 text-center">{{$mascota->raza}}</td>
            @isset($mascota->usuario->name)
              <td class="col-md-4 text-center">{{$mascota->usuario->name}}</td>
            @endisset
            @isset($mascota->organizacion->name)
              <td class="col-md-4 text-center">{{$mascota->organizacion->name}}</td>
            @endisset
            
            <td class="col-md-4"><a class="text-gray-900" href="{{route('mascotas.edit',$mascota->id)}}">Editar</a></td>
            <td class="col-md">
              <form action="{{route('mascotas.destroy',$mascota->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-warning text-gray-900" type="submit" value="Eliminar">
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  <hr>
</div>
@endsection