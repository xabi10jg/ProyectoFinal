<!DOCTYPE html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Comanimals</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Comanimals</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <!--<li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">@lang('Servicios')</a>
          </li>-->
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">@lang('Acogidas')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">@lang('Quienes Somos')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">@lang('Equipo')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">@lang('Contacto')</a>
          </li>
          @guest
                            <li class="nav-item">
                                <a class="nav-link"data-toggle="modal" data-target="#modalLoginForm">@lang('Iniciar Sesión')</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">@lang('Registrarse')</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('home')}}">
                                    @lang('Perfil')
                                    </a>
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('change_lang', ['locale' => 'es']) }}">ES </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('change_lang', ['locale' => 'en']) }}">EN</a>
                    </li>
              
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <img class="img-fluid" src="img/logos/logo.png" alt="logo empresa">
        <div class="intro-lead-in">@lang('!Bienvenidos a vuestra comunidad¡')</div>
        <div class="intro-heading text-uppercase">Comanimals</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">@lang('¡Unete ya!')</a>   
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Que ofrecemos')</h2>
          <h3 class="section-subheading text-muted">@lang('Una aplicacion para englobar todas las necesidades para tu mascota.')</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-paw fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">@lang('Refugios')</h4>
          <p class="text-muted">@lang('Accede rapidamente a una amplia gama de refugios de mascotas y lugares de acogida.')</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-clinic-medical fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">@lang('Veterinarios')</h4>
          <p class="text-muted">@lang('Una amplia cantidad de veterinarios a tu disposicion con unos pocos clicks.')</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-h-square fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">@lang('Hoteles')</h4>
          <p class="text-muted">@lang('Hoteles para ir con tus mascotas o para hospedarlo si te vas de vacaciones.')</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Mascotas en acogida o para adopcion')</h2>
          <h3 class="section-subheading text-muted">@lang('Algunas de las mascotas en espera de acogida o adopcion.')</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/jaky-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Jaky</h4>
            <p class="text-muted">@lang('Pastor aleman')</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/lur-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Lur</h4>
            <p class="text-muted">Border Collie</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/Bort-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Bort</h4>
            <p class="text-muted">@lang('Husky siberiano')</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/mast-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Mast</h4>
            <p class="text-muted">@lang('Mastin')</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/zuri-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Zuri</h4>
            <p class="text-muted">Labrador</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/doby-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Doby</h4>
            <p class="text-muted">Doberman</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Quienes Somos')</h2>
          <h3 class="section-subheading text-muted">@lang('Un breve recorrido sobre quienes somos.')</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>2018-2019</h4>
                  <h4 class="subheading">@lang('Creacion de Comanimals')</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">@lang('En el año 2018 tuvimos la idea de formar Comanimals, una aplicacion para englobar todos los aspectos posibles sobre las mascotas. En 2019 finalmente pusimos el proyecto en marcha.')</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>@lang('Noviembre 2019')</h4>
                  <h4 class="subheading">@lang('Una landing se ha creado')</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">@lang('Los primeros vocetos de esta nuestra landing page los creamos en noviembre de 2019, tras varios cambios y versiones finalizamos nuestra landing.')</p>
                </div>
              </div>
            </li>
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>@lang('Diciembre-Enero 2019-2020')</h4>
                  <h4 class="subheading">@lang('Transición a una aplicacion completa')</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">@lang('Constatamos las primeras necesidades que tendria nuestra aplicacion y comenzamos su diseño.')</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>@lang('Febrero 2020')</h4>
                  <h4 class="subheading">@lang('Expansion de segunda fase')</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">@lang('Añadimos los veterinarios y hoteles a nuestros anteriores servicios ofrecidos con las protectoras y refugios.')</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>@lang('!Se Parte')
                  <br>@lang('De Nuestra')
                  <br>@lang('Historia¡')</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Nuestro increible equipo')</h2>
          <h3 class="section-subheading text-muted">@lang('Los componentes de nuestro experimentado equipo.')</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Andoni Bartolome Gonzalez</h4>
            <p class="text-muted">@lang('Coordinador')</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Jon Valdes Diaz</h4>
            <p class="text-muted">@lang('Asistente de direccion')</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
            <h4>Xabier Jacob Gonzalez</h4>
            <p class="text-muted">@lang('Tecnico especialista')</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">@lang('Equipo con gran experiencia y dominio de desarrollo y diseño web.')</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Clients 
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>
  -->

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Contacto')</h2>
          <h3 class="section-subheading">@lang('Si tienes cualquier duda o comentario no dudes en usar el area de contacto aqui abajo. Introduce todos los valores correctamente para poder realizar la consulta.')</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" action="{{route('contacto')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" name="nombre" id="nombre" type="text" placeholder="@lang('Introduce un nombre.') *" required>
                  <div class="section-subheading" id="nombreMal">@lang('Introduce un nombre.')</div>
                </div>
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="@lang('Introduce un email.') *" required>
                  <div class="section-subheading" id="emailMal">@lang('Introduce un email.')</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" type="text" name="mensaje" id="mensaje" placeholder="@lang('Introduce un Mensaje.') *" required>
                  <div class="section-subheading" id="mensajeMal">@lang('Introduce un Mensaje.')</div>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="submit" class="btn btn-primary btn-xl text-uppercase" type="submit" disabled>@lang('Enviar datos')</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">@lang('Copyright &copy; Tu sitio Web 2019')</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">@lang('Política de Privacidad')</a>
            </li>
            <li class="list-inline-item">
              <a href="#">@lang('Terminos de Uso')</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Jacky</h2>
                <p class="item-intro text-muted">@lang('Pastor aleman')</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/jaky.jpg" alt="">
                <p>@lang('Amable y cariñoso, acostumbrado a estar con niños. Esta en busca de un nuevo hogar.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Enero 2017')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Pastor Aleman')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Lur</h2>
                <p class="item-intro text-muted">Border Collie</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/lur.jpg" alt="">
                <p>@lang('Energico y cariñoso. Un poco asustadizo, le encanta correr por el monte y coger los palos mas grandes que encuentra.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Enero 2019')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Border Collie')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Bort</h2>
                <p class="item-intro text-muted">@lang('Husky siberiano')</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/Bort.jpg" alt="">
                <p>@lang('Le encanta pasear y correr, muy cariñoso sobre todo con los niños.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Marzo 2016')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Husky siberiano')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Mast</h2>
                <p class="item-intro text-muted">@lang('Mastin')</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/mast.jpg" alt="">
                <p>@lang('Perezoso y cariñoso. Le encanta jugar.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Junio 2012')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Mastin')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Zuri</h2>
                <p class="item-intro text-muted">Labrador.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/zuri.jpg" alt="">
                <p>@lang('Amable y cariñoso. Le encanta jugar y pasear. Sin problemas con otros perros.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Julio 2018')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Labrador')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Doby</h2>
                <p class="item-intro text-muted">Doberman.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/doby.jpg" alt="">
                <p>@lang('Muy cariñoso y tranquilo. Doby es libre. El amo libero a Doby.')</p>
                <ul class="list-inline">
                  <li>@lang('Nacimiento: Marzo 2016')</li>
                  <li>@lang('Refugio: comanimals')</li>
                  <li>@lang('Raza: Doberman')</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  @lang('Cerrar')</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--modal del formulario-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('Registro')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">@lang('Nombre')</label>

                            <div class="col-md-6">
                                <input id="nameR" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div id="nameMal">Introduce un nombre.</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="emailR" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                <div id="emailMal2">Introduce un email.</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Contraseña')</label>

                            <div class="col-md-6">
                                <input id="passwordR" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                <div id="passwordMal2">Introduce una contraseña.</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('Confirmar contraseña')</label>

                            <div class="col-md-6">
                                <input id="password-confirmR" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                <div id="passwordconfirmMal2">Introduce la misma contraseña.</div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">                          
                <button type="submit" id="submitR" class="btn btn-primary" disabled>
                  @lang('Registrarse')
                </button>
                </div>
              </form>
            </div>
          </div>
        </div>
  <!--Modal login-->

  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">@lang('Iniciar Sesión')</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="emailI" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div id="emailMal3">Introduce un email valido.</div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('Contraseña')</label>

                            <div class="col-md-6">
                                <input id="passwordI" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <div id="passwordMal3">Introduce una contraseña valida.</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label" for="remember">
                                        @lang('Recordar Usuario')
                                    </label>
                                </div>
                            </div>
                        </div>              
                        <div class="modal-footer d-flex justify-content-center">
                            <button id="submitI" class="btn btn-default" disabled>{{ __('Iniciar Sesión') }}</button>
                            @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('¿Ha olvidad su contraseña?') }}
                              </a>
                            @endif
      </div>
      </form>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript -->
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
