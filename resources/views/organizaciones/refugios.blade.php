@extends('layouts.nav')
@section('content') 
    <header class="masthead2">
        <div class="container">
            <div class="intro-text text-dark">
              <div class="d-flex flex-row-reverse">
                <!--<div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Valoración </a><i class="fas fa-arrow-down"></i>
                  </button>
                </div>
                <div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Cantidad </a><i class="fas fa-arrow-down"></i>
                  </button>
                </div>-->

                <div class="col-lg-5">
                  <nav class="navbar navbar-light flex-row-reverse">
                    <form class="form-inline">
                      <input name="buscar" class="form-control mr-sm-2" type="search" aria-label="Search">
                      <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                    </form>
                  </nav>
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
                                    <img src="{{$refugio->img}}" width="40px">
                                </h5>
                                <p class="card-text">Katubihotz es una asociación creada para cuidar y controlar las colonias de gatos que viven en la calle y procurar una casa a nuestros felinos a través de la adopción.</p>
                                <a class="btn btn-primary" href="{{route('refugio',$refugio->id)}}">
                                    Más Información
                                </a>
                            </div>
                        </div><br>
                    @endforeach
                </div              <div class="col-lg-4">
                  <a class="btn btn-primary" href="#">Filtrar por Cantidad <i class="fas fa-arrow-down"></i></a>
                </div>
                <div class="col-lg-4">
                  <div class="input-group">
                    <input type="text" placeholder="Filtrar por Zona" class="form-control">
                    <span class="input-group-btn">
                      <button class="btn btn-primary" type="button">Buscar</button>
                    </span>
                  </div>
>>>>>>> 80731b3cc47879c214bb709e6355c3c5554c372b>
            </div>
        </div>
    </header>
    
 

    @endsection

</body>

</html>

