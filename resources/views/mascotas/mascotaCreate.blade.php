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

                    Nombre: <input id="nameR" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div id="nameMal">Introduce un nombre.</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                    Fecha Nacimiento: <input id="fechaR" type="date" class="@error('fecha_nacimiento') is-invalid @enderror" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autocomplete="fecha_nacimiento" autofocus>
                                @error('fecha_nacimiento')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                    Raza: <input id="razaR" type="text" class="@error('raza') is-invalid @enderror" name="raza" value="{{ old('raza') }}" required autocomplete="raza" autofocus>
                                <div id="razaMal">Introduce la raza del animal.</div>
                                @error('raza')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                                Descripcion: <input id="descripcionR" type="text" class="@error('descripcion') is-invalid @enderror" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion" autofocus>
                                <div id="descripcionMal">Introduce una descripcion valida.</div>
                                @error('descripcion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                                <!-- Falta validad las imagenes -->
                    Imagen: <input type="file" name="img"><br>
                    <input class="btn btn-primary" id="submitR" disabled type="submit" disabled  name="confirmarcambios" value="Confirmar">


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