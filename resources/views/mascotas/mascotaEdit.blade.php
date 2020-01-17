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
                    <form method="post" action="{{route('mascotas.update',$mascota->id)}}" enctype="multipart/form-data">
                      @method('PUT')
                      @csrf

                      Nombre: <input type="text" name="nombre" value="{{$mascota->name}}"><br>
                      @error('nombre')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      Fecha Nacimiento: <input type="date" name="fecha_nacimiento" value="{{$mascota->fecha_nacimiento}}"><br>
                      @error('fecha_nacimiento')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      Raza: <input type="text" name="raza" value="{{$mascota->raza}}"><br>
                      @error('raza')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      Descripcion: <input type="text" name="descripcion" value="{{$mascota->descripcion}}"><br>
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