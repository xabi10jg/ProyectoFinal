@extends('layouts.admin')
@section('content')
<div class="col-sm-8 text-left"> 
    <div class="prueba">
      <table id="orgs" class="col-lg-12 text-center">
      	<tr>
	    	<th class="col-md-4 text-center">@lang('Nombre')</th>
	        <th class="col-md-4 text-center">Email</th>
	        <th class="col-md-4 text-center">@lang('Tipo')</th>
	    </tr>
	    @foreach($organizaciones as $org)
	        <tr>
	          <td class="col-md-4">{{$org->name}}</td>
	          <td class="col-md-4">{{$org->email}}</td>
	          <td class="col-md-4">{{$org->tipo->name}}</td>
	          <td class="col-md-4"><a href="{{route('org.edit',$org->id)}}">Editar</a></td>
	          <td class="col-md">
	            <form action="{{route('org.destroy',$org->id)}}" method="post">
	              @method('DELETE')
	              @csrf
	              <input type="submit" value="Eliminar">
	            </form>
	          </td>
	        </tr>
      	@endforeach
    </table>
    </div>
  <hr>
</div>
@endsection