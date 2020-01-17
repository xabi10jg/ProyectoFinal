@extends('layouts.nav')
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
                    <div class="prueba">
                        @lang('Nombre'): {{Auth()->user()->name}}<br>
                        Apellido: {{Auth()->user()->apellido}}</br>
                        E-mail: {{Auth()->user()->email}}<br>
                        Dirección: {{Auth()->user()->direccion}}<br>
                        Localidad: {{Auth()->user()->localidad}}<br>
                        Provincia: {{Auth()->user()->provincia}}<br>
                        País: {{Auth()->user()->pais}}<br>
                        Teléfono: {{Auth()->user()->telefono}}<br>
                        Rol: {{Auth()->user()->roles->rol}}<br>

                        Te uniste en {{Auth()->user()->email_verified_at}}<br>
                            <a class="btn btn-primary" href="{{route('FormularioEditar', Auth::user()->id)}}">Editar</a>
                            <a class="btn btn-primary" href="{{route('EliminarUsuario', Auth::user()->id)}}">Eliminar</a>
                        
                    </div>
                    

                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>