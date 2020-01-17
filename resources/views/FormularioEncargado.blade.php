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
						  <option value="{{$tip->name}}">{{$tip->name}}</option>
						 @endforeach
						</select><br>
                      @error('organizacion')
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