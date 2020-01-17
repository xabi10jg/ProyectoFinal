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

                    Nombre: <input type="text" name="nombre" value=""><br>
                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror<br>
                    Fecha Nacimiento: <input type="date" name="fecha_nacimiento"><br>
                    @error('fecha_nacimiento')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror<br>
                    Raza: <input type="text" name="raza"><br>
                    @error('raza')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror<br>
                    Descripcion: <input type="text" name="descripcion"><br>
                    @error('descripcion')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror<br>
                    Imagen: <input type="file" name="img"><br>
                    @error('img')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror<br>
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