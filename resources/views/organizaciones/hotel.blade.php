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
                        <h2 class="section-heading text-uppercase">{{$hotel->name}}</h2>
                    </div>
                    <div class="text-black">
                        <div class="row col-lg-6 mx-auto">
                            <img class="card-img-top" src="{{$hotel->img}}">
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">Email: {{$hotel->email}}</div>
                            <div class="col-lg-6">@lang('Telefono'): {{$hotel->telefono}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Direccion'): {{$hotel->direccion}}</div>
                            <div class="col-lg-6">@lang('Localidad'): {{$hotel->localidad}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Pais'): {{$hotel->pais}}</div>
                            <div class="col-lg-6">@lang('Encargado'): {{$hotel->encargado->name}}</div>
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