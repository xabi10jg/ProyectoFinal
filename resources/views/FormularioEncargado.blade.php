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
                      <h2 class="section-heading text-primary text-uppercase">@lang('Solicitar creacion de organizacion')</h2>
                    </div>
                    <form method="post" action="{{route('formularioEnc')}}">
                      @csrf
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>Nombre:</label>
                          <input type="text" class="form-control" id="nombreFE" placeholder="Nombre de la organizacion" name="nombre">
                          <div id="nombreMalFE">Introduce un nombre valido</div>
                          @error('nombre')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Email:</label>
                          <input type="email" class="form-control" id="emailFE" placeholder="Introduce un email" name="email">
                          <div id="emailMalFE">Introduce un email valido</div>
                          @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-lg-6">
                          <label>CIF:</label>
                          <input type="text" class="form-control" id="cifFE" placeholder="Introduce el CIF" name="cif">
                          <div id="cifMalFE">Introduce un CIF valido</div>
                          @error('nombre')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                        <div class="col-lg-6">
                          <label>Tipo de Organizacion:</label>
                          <select class="custom-select" name="tipo">
                          @foreach ($tipo as $tip)
                            <option value="{{$tip->id}}">{{$tip->name}}</option>
                          @endforeach
                          </select>
                          @error('tipo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div><br>                     
                      <input type="text" name="encargado" value="{{Auth::user()->id}}" hidden>
                      <input class="btn btn-primary" disabled id="submitFE" type="submit" name="confirmarcambios" value="Confirmar">
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </header>
<script src="/js/peticionFE.js"></script>
@endsection
</body>
</html>