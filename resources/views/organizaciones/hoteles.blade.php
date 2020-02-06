@extends('layouts.nav')
@section('content')
<header class="masthead2">
  <section class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Hoteles')</h2>
        </div>
        <br>
        <div class="row col-lg-12 justify-content-center">
          @foreach($hoteles as $hotel)
          <div class="col-lg-4">
            <div class="card1">
              <div class="card-body">
                <h5 class="card-title">{{$hotel->name}}</h5>
                <img class="card-img1" width="100%" src="{{$hotel->img}}">
                <p class="card-text">Email: {{$hotel->email}}</p>
                <p class="card-text">Dirección: {{$hotel->direccion}}</p>
                <p class="card-text">Horario: Lunes a Sábado {{$hotel->horarioApertura}}-{{$hotel->horarioCierre}}</p>
                <a class="btn btn-primary" href="{{route('hotel',$hotel->id)}}">Más Información</a>
              </div>
            </div><br> 
          </div>         
          @endforeach    
        </div>
      </div>
    </div>
  </section>
</header>
@endsection
</body>
</html>