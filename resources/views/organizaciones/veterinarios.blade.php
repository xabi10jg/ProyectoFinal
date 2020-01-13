@extends('layouts.nav')
@section('content')


<header class="masthead">
    <div class="container">
            
      <div class="intro-text">
        <h1 class="intro-heading text-uppercase">Veterinarios</h1>

        <div class="d-flex flex-row">
                <div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Valoración </a><i class="fas fa-arrow-down"></i>
                  </button>
                </div>
                <div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Disponibilidad </a><i class="fas fa-arrow-down"></i>
                  </button>
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

        	<!--Aqui habría que poner el foreach para recorrer la base de datos-->

        <div class="col-lg-5 text-center">
          <div class="card  text-dark">
            <div class="card-body">

       			<img class="card-img" src="img/portfolio/Bort.jpg">

       			<div class="card-title">Clinica Veterinaria Bidebieta</div>
       			<hr>
       			<p>Dirección: Serapio Mujika, 20, 20016 Donostia, Gipuzkoa</p>
       			<hr>
       			<p>Horario: Lunes a Sábado 10:00-19:00</p>
       			<br>
       			<a href="{{route('veterinario')}}"><button>Ver Veterinaria</button></a>
       			


          	</div>
          </div>
        </div>
    	</div>
      </div>
    </div>
</header>

@endsection

</body>

</html>