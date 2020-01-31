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
                      @isset($mascota->organizacion)
                        @if(Auth::user()->id === $mascota->organizacion->encargado_id)
                          <label>Propietario:</label>
                          <select class="custom-select" name="user">
                            <option hidden selected value="null">Sin Propietario</option>
                            <option value="null">Sin Propietario</option>
                            @foreach($users as $user)
                              @if($user->id === $mascota->propietario)
                                <option selected value="{{$user->id}}">{{$user->name}}</option>
                              @else
                                <option value="{{$user->id}}">{{$user->name}}</option>
                              @endif
                            @endforeach
                          </select>
                        @endif
                      @endisset
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