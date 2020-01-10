@extends('layouts.nav')
@section('content') 
<header class="masthead">
  <div class="container">
    <div class="intro-text text-dark">
      <h1 class="text-white">Refugios</h1>
      <div class="row justify-content-start">
        @foreach($refugios as $refugio)
        <div class="card col-md-5 col-sm-6 mx-2 mt-3">
          <img src="{{$refugio->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">{{$refugio->name}}</h4>
            <p>Email: {{$refugio->email}}</p>
            <p>Direccion: {{$refugio->direccion}}</p>
            <p>Telefono: {{$refugio->telefono}}</p>
            <p>Horario: De {{$refugio->horarioApertura}} hasta {{$refugio->horarioCierre}}</p>
          </div>
        </div>
        @endforeach
        </div>
      </div>

      <h1 class="text-white">Refugios</h1>
      <div class="row justify-content-start">
        @foreach($veterinarios as $veterinario)
        <div class="text-dark card col-md-5 col-sm-6 mx-2 mt-3">
          <img src="{{$veterinario->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-text">{{$veterinario->name}}</h4>
            <p>Email: {{$veterinario->email}}</p>
            <p>Direccion: {{$veterinario->direccion}}</p>
            <p>Telefono: {{$veterinario->telefono}}</p>
            <p>Horario: De {{$veterinario->horarioApertura}} hasta {{$veterinario->horarioCierre}}</p>
          </div>
        </div>
        @endforeach
        </div>
      </div>

      <h1 class="text-white">Hoteles</h1>
      <div class="row justify-content-start">
        @foreach($hoteles as $hotel)
        <div class="text-dark card col-md-5 col-sm-6 mx-2 mt-3">
          <img src="{{$hotel->img}}" class="card-img-top">
          <div class="card-body">
            <h4 class="card-text">{{$hotel->name}}</h4>
            <p>Email: {{$hotel->email}}</p>
            <p>Direccion: {{$hotel->direccion}}</p>
            <p>Telefono: {{$hotel->telefono}}</p>
            <p>Horario: De {{$hotel->horarioApertura}} hasta {{$hotel->horarioCierre}}</p>
          </div>
        </div>
        @endforeach
        </div>
    </div>
  </div>
</header>
@endsection

</body>

</html>
