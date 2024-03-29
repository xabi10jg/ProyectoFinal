@extends('layouts.nav')
@section('content')
<header class="masthead2">
  <section class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">@lang('Tus Mascotas')</h2>
        </div>
        <div class="col-md-12">
          <section class="page-section2" id="portfolio">
            <div class="d-flex flex-row">
              <div class="col-lg-5">
                <a class="btn btn-primary" href="{{route('mascotas.create')}}">Añadir Mascota</a>
              </div>
            </div><br><br>
            <div class="container">
              <div class="row col-lg-12 justify-content-center">
                @foreach($mascotas as $mascota)
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
@endsection
</body>
</html>

