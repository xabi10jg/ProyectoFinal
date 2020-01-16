@extends('layouts.nav')
@section('content') 
    <header class="masthead">
        <div class="container">
            <div class="intro-text text-dark">
              <div class="d-flex flex-row">
                <div class="col-lg-4">
                  <a class="btn btn-primary" href="#">Filtrar por Valoración <i class="fas fa-arrow-down"></i></a>
                </div>
                <div class="col-lg-4">
                  <a class="btn btn-primary" href="#">Filtrar por Cantidad <i class="fas fa-arrow-down"></i></a>
                </div>
                <div class="col-lg-4">
                  <div class="input-group">
                    <input type="text" placeholder="Filtrar por Zona" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>                        
              <br><br>
                <div class="row">

                    <div class="col-sm-12">
                    @foreach($refugios as $refugio)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$refugio->name}}
                                    <img src="img/logos/katubihotz.jpg" width="40px">
                                </h5>
                                <p class="card-text">Katubihotz es una asociación creada para cuidar y controlar las colonias de gatos que viven en la calle y procurar una casa a nuestros felinos a través de la adopción.</p>
                                <a class="btn btn-primary" href="{{route('refugio',$refugio->id)}}">
                                    Más Información
                                </a>
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

