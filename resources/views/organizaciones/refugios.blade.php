@extends('layouts.nav')
@section('content') 
<header class="masthead2">
  <section class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Refugios')</h2>
        </div>
        <div class="d-flex flex-row-reverse">
          <div class="row">
            <div class="col-sm-4">
              <button class="btn btn-primary" type="button">
                <a style="color: white; text-decoration: none;" href="#">Filtrar por Valoración </a><i class="fas fa-arrow-down"></i>
              </button>
            </div>
            <div class="col-sm-4">
              <button class="btn btn-primary" type="button">
                <a style="color: white; text-decoration: none;" href="#">Filtrar por Cantidad </a><i class="fas fa-arrow-down"></i>
              </button>
            </div>
            <div class="col-sm-4">
              <nav class="navbar navbar-light flex-row-reverse">
                <form class="form-inline">
                  <input name="buscar" class="form-control mr-sm-2" type="search" aria-label="Search">
                  <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
              </nav>
            </div>
          </div>
        </div><br><br>
        <div class="row">
          @foreach($refugios as $refugio)
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{$refugio->name}}<img src="{{$refugio->img}}" width="40px"></h5>
                  <p class="card-text">Katubihotz es una asociación creada para cuidar y controlar las colonias de gatos que viven en la calle y procurar una casa a nuestros felinos a través de la adopción.</p>
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

