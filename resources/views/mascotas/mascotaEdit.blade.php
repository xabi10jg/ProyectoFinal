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
                    <div class="col-lg-12 text-center mt-5">
                      <h2 class="section-heading text-primary text-uppercase">@lang('Editar Mascota')</h2>
                    </div>
                    <form method="post" action="{{route('mascotas.update',$mascota->id)}}" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf

                      <div class="form-row">
                      <div class="col-lg-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" id="nameME" name="nombre" value="{{$mascota->name}}" required>
                        @error('nombre')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="nombreMalME">Introduce un nombre valido</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Fecha Nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-lg-6">
                        <label>Raza:</label>
                        <input type="text" class="form-control" id="razaME" placeholder="Introduce una raza" name="raza" value="{{$mascota->raza}}" required>
                        @error('raza')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="razaMalME">Introduce una raza valida</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Descripcion:</label>
                        <input type="text" class="form-control" id="descripcionME" value="{{$mascota->descripcion}}" name="descripcion" required>
                        @error('descripcion')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="descMalME">Introduce una descripcion valida</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Tipo Mascota:</label>
                        <select class="custom-select" name="tipo" required>
                          @if($mascota->tipo === "Perro")
                            <option selected value="Perro">Perro</option>
                          @else
                            <option value="Perro">Perro</option>
                          @endif
                          @if($mascota->tipo === "Gato")
                            <option selected value="Gato">Gato</option>
                          @else
                            <option value="Gato">Gato</option>
                          @endif
                          @if($mascota->tipo === "Pajaro")
                            <option selected value="Pajaro">Pajaro</option>
                          @else
                            <option value="Pajaro">Pajaro</option>
                          @endif
                        </select>
                        @error('tipo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="col-lg-6">
                        <label>Imagen:</label>
                        <input type="file" class="custom-file text-center" name="img" required>
                        @error('img')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                    </div><br>
                      <input class="btn btn-primary" id="submitME" type="submit" disabled name="confirmarcambios" value="Confirmar">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
  <script src="/js/mascotaEdit.js"></script>
@endsection
</body>
</html>