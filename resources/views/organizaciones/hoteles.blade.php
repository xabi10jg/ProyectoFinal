@extends('layouts.nav')
<header class="masthead">
    <section class="page-section">
        <div class="container">
            <div class="row justify-content-center">

                
                <div class="col-lg-12 text-center mt-5">
                    <h2 class="section-heading text-uppercase">@lang('Hoteles')</h2>
                </div>

                <div class="d-flex flex-row mt-4">
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
              
                    <div class="col-md-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
            
                            <div class="prueba">
                                @foreach($hoteles as $hotel)
                                    Nombre: {{$hotel->name}}<br>
                                    Email: {{$hotel->email}}<br>
                                    TLF: {{$hotel->telefono}}<br>
                                    Direccion: {{$hotel->direccion}}<br>
                                    Localidad: {{$hotel->localidad}}<br>
                                    Provincia: {{$hotel->provincia}}<br>
                                    Pais: {{$hotel->pais}}<br>
                                    Encargado: {{$hotel->encargado->name}}<br>
                                    <a class="btn btn-primary" href="{{route('hotel',$hotel->id)}}">
                                    Más Información</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>