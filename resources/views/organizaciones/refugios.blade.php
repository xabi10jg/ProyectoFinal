@extends('layouts.nav')
@section('content') 
<header class="masthead2">
  <section class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Refugios')</h2>
        </div>
       <br>
        <div class="row col-lg-12">
          @foreach($refugios as $refugio)
            <div class="col-sm-4">
              <div class="card1">
                <div class="card-body">
                  <img class="card-img1" src="{{$refugio->img}}">
                  <h5 class="card-title">{{$refugio->name}}</h5>
                  <p class="card-text">
                    Direccion: {{$refugio->direccion}}
                  </p>
                  <p>
                    Provincia: {{$refugio->provincia}}
                  </p>
                  <p>
                    Telefono: {{$refugio->telefono}}
                  </p>
                  <a class="btn btn-primary" href="{{route('refugio',$refugio->id)}}">Más Información</a>
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

