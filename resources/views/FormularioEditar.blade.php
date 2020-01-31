@extends('layouts.nav')
  <header class="masthead2">
    <section class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  <div class="prueba">
                    <form method="post" action="{{route('ConfirmarEdicion', Auth::user()->id)}}">
                    
                    @csrf
                    Nombre: <input id="nameR" type="text" value="{{Auth()->user()->name}}" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
                    <div id="nameMal">Introduce un nombre.</div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                    Apellido: <input id="apellidoR" type="text" value="{{Auth()->user()->apellido}}" class=" @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus><br>
                    <div id="apellidoMal">Introduce un apellido.</div>
                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror<br>
                    Email: <input id="emailR" type="text" name="email" value="{{Auth()->user()->email}}" class=" @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus><br>
                    <div id="emailMal">Introduce un email correcto.</div>
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Dirección: <input id="direccionR" type="text" name="direccion" value="{{Auth()->user()->direccion}}" class=" @error('direccion') is-invalid @enderror" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus><br>
                    <div id="direccionMal">Introduce un direccion correcta.</div>
                    @error('direccion')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Localidad: <input id="localidadR" type="text" name="localidad" value="{{Auth()->user()->localidad}}" class=" @error('localidad') is-invalid @enderror" value="{{ old('localidad') }}" required autocomplete="localidad" autofocus><br>
                    <div id="localidadMal">Introduce una localidad correcta.</div>
                    @error('localidad')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Provincia: <input id="provinciaR" type="text" name="provincia" value="{{Auth()->user()->provincia}}" class=" @error('provincia') is-invalid @enderror" value="{{ old('provincia') }}" required autocomplete="provincia" autofocus><br>
                    <div id="provinciaMal">Introduce una provincia correcta.</div>
                    @error('provincia')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    País: <input id="paisR" type="text" name="pais" value="{{Auth()->user()->pais}}"class=" @error('pais') is-invalid @enderror" value="{{ old('pais') }}" required autocomplete="pais" autofocus><br>
                    <div id="paisMal">Introduce un pais correcto.</div>
                    @error('pais')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    Teléfono: <input id="tlfR" type="text" name="telefono" value="{{Auth()->user()->telefono}}" class=" @error('telefono') is-invalid @enderror" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus><br>
                    <div id="tlfMal">Introduce un telefono correcto.</div>
                    @error('telefono')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                         @enderror<br>
                    <input class="btn btn-primary" id="submitR" enabled type="submit" name="confirmarcambios" value="Confirmar">


                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
</body>
</html>