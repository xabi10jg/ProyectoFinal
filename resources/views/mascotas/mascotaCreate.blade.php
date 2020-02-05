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
                      <h2 class="section-heading text-primary text-uppercase">@lang('Añadir Mascota')</h2>
                    </div>
                    <form method="post" action="{{route('mascotas.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-lg-6">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Introduce un nombre" name="nombre" value="" required>
                        @error('nombre')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="nombreMal">Introduce un nombre valido</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Fecha Nacimiento:</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-lg-6">
                        <label>Raza:</label>
                        <input type="text" class="form-control" placeholder="Introduce una raza" name="raza" value="" required>
                        @error('raza')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="razaMal">Introduce una raza valida</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Descripcion:</label>
                        <input type="text" class="form-control" placeholder="Introduce una descripcion" name="descripcion" required>
                        @error('descripcion')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="descMal">Introduce una descripcion valida</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Tipo Mascota:</label>
                        <select class="custom-select" name="tipo" required>
                          <option value="Perro">Perro</option>
                          <option value="Gato">Gato</option>
                          <option value="Pajaro">Pajaro</option>
                        </select>
                        @error('tipo')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="tipoMal">Selecciona un tipo de mascota</div>
                      </div>
                      <div class="col-lg-6">
                        <label>Imagen:</label>
                        <input type="file" class="custom-file text-center" name="img" required>
                        @error('img')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                        <div id="imgMal">Introduce una imagen valida</div>
                      </div>
                    </div><br>
                    <input class="btn btn-primary" type="submit" name="confirmarcambios" value="Confirmar">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
  @endsection
</body>
</html>