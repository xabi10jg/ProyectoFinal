@extends('layouts.nav')
@section('content')
<header class="masthead2">
  <section class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Veterinarios')</h2>
        </div>
       <br>
        <div class="row col-lg-12 justify-content-center">
          @foreach($veterinarios as $vet)
          <div class="col-lg-4">
            <div class="card1">
              <div class="card-body">
                <h5 class="card-title">{{$vet->name}}</h5>
                <img class="card-img1" width="100%" src="{{$vet->img}}">
                <p class="card-text">Email: {{$vet->email}}</p>
                <p class="card-text">Dirección: {{$vet->direccion}}</p>
                <p class="card-text">Horario: Lunes a Sábado {{$vet->horarioApertura}}--{{$vet->horarioCierre}}</p>
                <a class="btn btn-primary" href="{{route('veterinario',$vet->id)}}">Más Información</a>
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