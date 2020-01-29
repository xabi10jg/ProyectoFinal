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
                        <h2 class="section-heading text-uppercase">@lang('Perfil Usuario')</h2>
                    </div>
                    <div class="text-black">
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-4">@lang('Nombre'): {{Auth()->user()->name}}</div>
                            <div class="col-lg-4">@lang('Apellido'): {{Auth()->user()->apellido}}</div>
                            <div class="col-lg-4">E-mail: {{Auth()->user()->email}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-4">@lang('Direccion'): {{Auth()->user()->direccion}}</div>
                            <div class="col-lg-4">@lang('Localidad'): {{Auth()->user()->localidad}}</div>
                            <div class="col-lg-4">@lang('Provincia'): {{Auth()->user()->provincia}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-4">@lang('Pais'): {{Auth()->user()->pais}}</div>
                            <div class="col-lg-4">@lang('Telefono'): {{Auth()->user()->telefono}}</div>
                            <div class="col-lg-4">@lang('Rol'): {{Auth()->user()->roles->rol}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-12">Te uniste en {{Auth()->user()->email_verified_at}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col"><a class="btn btn-primary" href="{{route('FormularioEditar', Auth::user()->id)}}">Editar</a></div>
                            <div class="col"><a class="btn btn-primary" href="{{route('EliminarUsuario', Auth::user()->id)}}">Eliminar</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>