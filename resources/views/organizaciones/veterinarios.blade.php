@extends('layouts.nav')
@section('content')


<header class="masthead2">
    <div class="container">
            
      <div class="intro-text">
        <h1 class="intro-heading text-uppercase">Veterinarios</h1>

        <div class="d-flex flex-row">
                <div class="col-lg-4">
                  <a class="btn btn-primary" href="#">Filtrar por Valoración <i class="fas fa-arrow-down"></i></a>
                </div>
                <div class="col-lg-4">
                  <a class="btn btn-primary" href="#">Filtrar por Disponibilidad <i class="fas fa-arrow-down"></i></a>
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


        <div class="d-flex justify-content-around flex-wrap">
        @foreach($veterinarios as $veterinario)
          <div class="col-lg-5 text-center">
            <div class="card  text-dark">
              <div class="card-body">

       			    <img class="card-img" src="img/portfolio/Bort.jpg">

       			    <div class="card-title">{{$veterinario->name}}</div>
       			      <hr>
       			    <p>Dirección: {{$veterinario->direccion}}</p>
       			      <hr>
       			    <p>Horario: Lunes a Sábado {{$veterinario->horarioApertura}}-{{$veterinario->horarioCierre}}</p>
       			      <br>
       			    <a class="btn btn-primary" href="{{route('veterinario',$veterinario->id)}}">Ver Veterinaria</a>
          	  </div>
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