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

                      Nombre: <input type="text" name="nombre" placeholder="Nombre de la organización"><br>
                      @error('nombre')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      Email <input type="text" name="email" placeholder="Email de la cuenta"><br>
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      CIF <input type="text" name="cif" placeholder="CIF de la empresa"><br>
                      @error('cif')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                      Tipo de Organización: <select name="tipo">
                      	@foreach ($tipo as $tip)
						  <option value="{{$tip->id}}">{{$tip->name}}</option>
						 @endforeach
						</select><br>
                      @error('organizacion')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror<br>
                     
                      <input type="text" name="encargado" value="{{Auth::user()->id}}" hidden>
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