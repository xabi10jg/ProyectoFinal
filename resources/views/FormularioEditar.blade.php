@extends('layouts.nav')
  <header class="masthead">
    <section class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="prueba">
                    <form method="post" action="{{route('ConfirmarEdicion')}}">
                    
                    @csrf

                    Nombre: <input type="text" name="nombre" value="{{Auth()->user()->name}}"><br>
                    @error('nombre')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror<br>
                    Apellido: <input type="text" name="apellido" value="{{Auth()->user()->apellido}}"><br>
                    @error('apellido')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Email: <input type="text" name="email" value="{{Auth()->user()->email}}"><br>
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Dirección: <input type="text" name="direccion" value="{{Auth()->user()->direccion}}"><br>
                    @error('direccion')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Localidad: <input type="text" name="localidad" value="{{Auth()->user()->localidad}}"><br>
                    @error('localidad')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Provincia: <input type="text" name="provincia" value="{{Auth()->user()->provincia}}"><br>
                    @error('provincia')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    País: <input type="text" name="pais" value="{{Auth()->user()->pais}}"><br>
                    @error('pais')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Teléfono: <input type="text" name="telefono" value="{{Auth()->user()->telefono}}"><br>
                    @error('telefono')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    <input type="submit" name="confirmarcambios" value="Confirmar">


                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
@extends('layouts.scriptsBody')
</body>
</html>