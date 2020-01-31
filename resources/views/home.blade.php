@extends('layouts.nav')
@section('content')
<header class="masthead2">
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
                    </div><br>
                    <div class="text-black justify-content-center">
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Nombre'): {{Auth()->user()->name}}</div>
                            <div class="col-lg-6">@lang('Apellido'): {{Auth()->user()->apellido}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">E-mail: {{Auth()->user()->email}}</div>
                            <div class="col-lg-6">@lang('Direccion'): {{Auth()->user()->direccion}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Localidad'): {{Auth()->user()->localidad}}</div>
                            <div class="col-lg-6">@lang('Provincia'): {{Auth()->user()->provincia}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Pais'): {{Auth()->user()->pais}}</div>
                            <div class="col-lg-6">@lang('Telefono'): {{Auth()->user()->telefono}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Rol'): {{Auth()->user()->roles->rol}}</div>
                            <div class="col-lg-6">Te uniste en {{Auth()->user()->email_verified_at}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col"><a class="btn btn-primary" href="{{route('FormularioEditar', Auth::user()->id)}}">Editar</a></div>
                            <div class="col"><a class="btn btn-primary" href="{{route('EliminarUsuario', Auth::user()->id)}}">Eliminar</a></div>
                        </div>
                    </div>
                    <section class="page-section2" id="portfolio">
                    <div class="container">
                        <div class="row col-lg-12 justify-content-center">
                        @foreach($mascotas as $mascota)
                            @if($mascota->propietario === Auth::user()->id)
                            <div class="col-md-4 col-sm-6 portfolio-item">
                              <a class="portfolio-link" data-toggle="modal" href="#mascota{{$mascota->id}}">
                                <div class="portfolio-hover">
                                  <div class="portfolio-hover-content">
                                    <i class="fas fa-plus fa-3x"></i>
                                  </div>
                                </div>
                                <img class="img-fluid d-block mx-auto" src="{{$mascota->img}}" alt="" width="100%" height="50%;">
                              </a>
                              <div class="portfolio-caption">
                                <h4>{{$mascota->name}}</h4>
                                <p class="text-muted">{{$mascota->raza}}</p>
                              </div>
                            </div>
                            @endif
                        @endforeach
                      </div>
                    </div>
                    </section>
                    <!--Modal-->
                    @foreach($mascotas as $mascota)
                    <div class="portfolio-modal modal fade" id="mascota{{$mascota->id}}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                  <p>{{$mascota->descripcion}}</p>
                                  <ul class="list-inline">
                                    <li>{{$mascota->fecha_nacimiento}}</li>
                                    @isset($mascota->organizacion)
                                      <li>{{$mascota->organizacion->name}}</li>
                                    @endisset
                                    @isset($mascota->usuario->name)
                                      <li>{{$mascota->usuario->name}}</li>
                                    @endisset
                                    <li>{{$mascota->raza}}</li>
                                  </ul>
                                    @if(Auth::user()->id === $mascota->propietario)
                                        <a class="btn btn-primary" href="{{route('mascotas.edit',$mascota->id)}}"><i class="fas fa-pencil-alt"></i>
                                            @lang('Editar')</a>
                                            <form style="display:inline" action="{{  route('mascotas.destroy',$mascota->id) }}" method="POST">
                                             @method('DELETE')
                                             @csrf
                                          <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-trash"></i>
                                            @lang('Eliminar')</button></form>
                                          <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times"></i>
                                            @lang('Cerrar')</button>
                                    @endif
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
@endsection
</body>
</html>