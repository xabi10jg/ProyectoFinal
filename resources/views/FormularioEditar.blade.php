@extends('layouts.nav')
@section('content')
  <header class="masthead2">
    <section class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="prueba">
                    <form method="post" class="text-center" action="{{route('ConfirmarEdicion', Auth::user()->id)}}" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Nombre</label>
                          <input type="text" class="form-control" id="nombreUA" name="nombre" value="{{Auth::user()->name}}">
                          <div id="nombreMalUA">Introduce un nombre valido</div>
                          @error('nombre')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Apellido</label>
                          <input type="text" name="apellido" id="apellidoUA" class="form-control" value="{{Auth::user()->apellido}}">
                          <div id="apellidoMalUA">Introduce un apellido valido</div>
                          @error('apellido')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Email</label>
                          <input type="text" name="email" id="emailUA" class="form-control" value="{{Auth::user()->email}}">
                          <div id="emailMalUA">Introduce un email valido</div>
                           @error('email')
                              <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Dirección</label>
                          <input type="text" name="direccion" id="direccionUA" value="{{Auth::user()->direccion}}" class="form-control">
                          <div id="direccionMalUA">Introduce una direccion valida</div>
                          @error('direccion')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Localidad</label>
                          <input type="text" name="localidad" id="localidadUA" value="{{Auth::user()->localidad}}" class="form-control">
                          <div id="localidadMalUA">Introduce una localidad valida</div>
                          @error('localidad')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Provincia</label>
                          <input type="text" name="provincia" id="provinciaUA" value="{{Auth::user()->provincia}}" class="form-control">
                          <div id="provinciaMalUA">Introduce una localidad valida</div>
                          @error('provincia')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>País</label>
                          <input type="text" name="pais" id="paisUA" value="{{Auth::user()->pais}}" class="form-control">
                          <div id="paisMalUA">Introduce un pais valido</div>
                          @error('pais')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Teléfono</label>
                          <input type="text" name="telefono" id="telefonoUA" value="{{Auth::user()->telefono}}" class="form-control">
                          <div id="telefonoMalUA">Introduce un telefono valido</div>
                          @error('telefono')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col">
                          <label>Imagen:</label>
                          <input type="file" class="custom-file text-center" name="imgUser">
                          @error('img')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div><br>
                        <input type="submit" class="btn btn-warning text-gray-900" id="submitUA" disabled name="confirmarcambios" value="Confirmar">
                      </form>
                  @if(Auth()->user()->role_id===2)
                  @foreach($organizacion as $org)
                  <form method="post" class="text-center" action="{{route('org.update', $org->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="form-row">
                        <div class="col-lg-6">
                          <label>Nombre:</label>
                          <input type="text" class="form-control" id="nombreOEA" value="{{$org->name}}" name="nombre">
                          <div id="nombreMalOEA">Introduce un nombre valido</div>
                          @error('nombre')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Email:</label>
                          <input type="email" id="emailOEA" class="form-control" name="email" value="{{$org->email}}">
                          <div id="emailMalOEA">Introduce un nombre valido</div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Direccion:</label>
                          <input type="text" id="direccionOEA" class="form-control" name="direccion" value="{{$org->direccion}}">
                          <div id="direccionMalOEA">Introduce un nombre valido</div>
                          @error('direccion')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Localidad:</label>
                          <input type="text" id="localidadOEA" class="form-control" name="localidad" value="{{$org->localidad}}">
                          <div id="localidadMalOEA">Introduce un nombre valido</div>
                          @error('direccion')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Provincia:</label>
                          <input type="text" id="provinciaOEA" class="form-control" name="provincia" value="{{$org->provincia}}">
                          <div id="provinciaMalOEA">Introduce un nombre valido</div>
                          @error('provincia')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Pais:</label>
                          <input type="text" id="paisOEA" class="form-control" name="pais" value="{{$org->pais}}">
                          <div id="paisMalOEA">Introduce un nombre valido</div>
                          @error('pais')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Telefono:</label>
                          <input type="text" id="telefonoOEA" class="form-control" name="telefono" value="{{$org->telefono}}">
                          <div id="telefonoMalOEA">Introduce un nombre valido</div>
                          @error('telefono')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>CIF:</label>
                          <input type="text" id="cifOEA" class="form-control" name="CIF" value="{{$org->CIF}}">
                          <div id="cifMalOEA">Introduce un nombre valido</div>
                          @error('CIF')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Horario Apertura:</label>
                          <input type="time" class="form-control" name="HApertura" value="{{$org->horarioApertura}}">
                          @error('HApertura')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Horario Cierre:</label>
                          <input type="time" class="form-control" name="HCierre" value="{{$org->horarioCierre}}">
                          @error('HCierres')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Tipo Organizacion:</label>
                          <select class="custom-select" name="tipo">
                            @foreach($tipos as $tipo)
                              @if($tipo->id === $org->tipo_id)
                                <option selected value="{{$tipo->id}}">{{$tipo->name}}</option>
                              @else
                                <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                              @endif
                            @endforeach
                          </select>
                          @error('tipo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Imagen:</label>
                          <input type="file" class="custom-file text-center" name="img">
                          @error('img')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div><br>
                      <input class="btn btn-warning text-gray-900" id="submitOEA" disabled type="submit" name="confirmarcambios" value="Confirmar">
                  </form>
                  @endforeach
                  @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
  <script src="/js/editUserAdmin.js"></script>
  <script src="/js/orgAdminEdit.js"></script>
@endsection