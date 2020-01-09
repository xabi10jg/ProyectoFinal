@extends('layouts.nav')
<header class="masthead">
    <section class="page-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">@lang('Perfil Usuario')</h2>
                    </div>
                    <div class="prueba">
                        @lang('Nombre'): {{Auth()->user()->name}}<br>
                        Apellido: {{Auth()->user()->apellido}}</br>
                        E-mail: {{Auth()->user()->email}}<br>
                        Dirección: {{Auth()->user()->direccion}}<br>
                        Localidad: {{Auth()->user()->localidad}}<br>
                        Provincia: {{Auth()->user()->provincia}}<br>
                        País: {{Auth()->user()->pais}}<br>
                        Teléfono: {{Auth()->user()->telefono}}<br>
                        Rol: {{Auth()->user()->roles->rol}}<br>

                        Te uniste en {{Auth()->user()->email_verified_at}}<br>
                        <button id="EditarPerfil">
                            <a href="{{route('FormularioEditar')}}">Editar</a>
                        </button>
                        <button id="EliminarPerfil">
                            <a href="{{route('EliminarUsuario')}}">Eliminar</a>
                        </button>
                        <button id="añadirMascota">
                            <a href="{{route('mascotas.create')}}">Añadir Mascota</a>
                        </button>
                    </div>
                    <div class="prueba">
                        <section class="bg-light page-section" id="portfolio">
                            <div class="container">
                                <div class="row">
                                @foreach($mascotas as $mascota)
                                    <div class="col-md-4 col-sm-6 portfolio-item">
                                        <a class="portfolio-link" data-toggle="modal" href="#mascota{{$mascota->id}}">
                                        <div class="portfolio-hover">
                                          <div class="portfolio-hover-content">
                                            <i class="fas fa-plus fa-3x"></i>
                                          </div>
                                        </div>
                                        <img class="img-fluid" src="{{$mascota->img}}" alt="">
                                        </a>
                                      <div class="portfolio-caption">
                                        <h4>{{$mascota->name}}</h4>
                                        <p class="text-muted">{{$mascota->raza}}</p>
                                      </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </section>
                        


                        @foreach($mascotas as $mascota)
                        <div class="portfolio-modal modal fade" id="mascota{{$mascota->id}}" tabindex="-1" role="dialog" aria-hidden="false">
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
                                    <h2 class="text-uppercase">{{$mascota->name}}</h2>
                                    <p class="item-intro text-muted">{{$mascota->raza}}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{$mascota->img}}" alt="">
                                    <p>Descripcion: {{$mascota->descripcion}}</p>
                                    <ul class="list-inline">
                                      <li>Nacimiento: {{$mascota->fecha_nacimiento}}</li>
                                      <li>Raza: {{$mascota->raza}}</li>
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
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>