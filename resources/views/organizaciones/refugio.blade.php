@extends('layouts.nav')
@section('content')
<header class="masthead2">
    <section class="page-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">{{$refugio->name}}</h2>
                    </div>
                    <div class="prueba mb-5">
                    @auth
                        @if(Auth::user()->id===$refugio->encargado_id)
                        <div class="d-flex flex-row">
                            <div class="col-lg-12">
                                <a class="btn btn-primary" href="{{route('mascotas.create')}}">Añadir Mascota</a>
                            </div>
                        </div>
                        @endif
                    @endauth
                    </div>
                    <div class="text-black">
                        <div class="row col-lg-6 mx-auto">
                            <img class="card-img-top" src="{{$refugio->img}}">
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">Email: {{$refugio->email}}</div>
                            <div class="col-lg-6">@lang('Telefono'): {{$refugio->telefono}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Direccion'): {{$refugio->direccion}}</div>
                            <div class="col-lg-6">@lang('Localidad'): {{$refugio->localidad}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Pais'): {{$refugio->pais}}</div>
                            <div class="col-lg-6">Horario: Desde {{$refugio->horarioApertura}} hasta {{$refugio->horarioCierre}}</div>
                        </div>
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