@extends('layouts.nav')
@section('content') 
    <header class="masthead">
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
                                    <img src="img/logos/katubihotz.jpg" width="40px">
                                </h5>
                                <p class="card-text">Katubihotz es una asociación creada para cuidar y controlar las colonias de gatos que viven en la calle y procurar una casa a nuestros felinos a través de la adopción.</p>
                                <a style="color:white; text-decoration:none;" href="{{route('refugio',$refugio->id)}}"><button type="button" class="btn btn-primary">
                                    Más Información
                                </button></a>
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

