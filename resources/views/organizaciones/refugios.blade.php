@extends('layouts.nav')  
    <header class="masthead">
    
        <div class="container">
            <div class="intro-text text-dark">
              <div class="d-flex flex-row">
                <div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Valoración </a><i class="fas fa-arrow-down"></i>
                  </button>
                </div>
                <div class="col-lg-4">
                  <button class="btn btn-primary" type="button">
                     <a style="color: white; text-decoration: none;" href="#">Filtrar por Cantidad </a><i class="fas fa-arrow-down"></i>
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
                                <button type="button" class="btn btn-primary">
                                    Ver Refugio
                                </button>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </header>
    
 

    



  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/validacion.js"></script>
  <script src="js/registro.js"></script>
  <script src="js/inicioSesion.js"></script>
  <!-- 
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  -->
  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>


