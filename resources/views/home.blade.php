@extends('layouts.app')

@section('content')
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

                    <h1>Perfil Usuario Estandar</h1>

                    Nombre: {{Auth()->user()->name}}<br>
                    Apellido: {{Auth()->user()->apellido}}<br>
                    E-mail: {{Auth()->user()->email}}<br>
                    Dirección: {{Auth()->user()->direccion}}<br>
                    Localidad: {{Auth()->user()->localidad}}<br>
                    Provincia: {{Auth()->user()->provincia}}<br>
                    País: {{Auth()->user()->pais}}<br>
                    Teléfono: {{Auth()->user()->telefono}}<br>

                    Te uniste en {{Auth()->user()->email_verified_at}}<br>
                    <button id="EditarPerfil"><a href="{{route('FormularioEditar')}}">Editar</a></button>
                    <button id="EliminarPerfil"><a href="{{route('EliminarUsuario')}}">Eliminar</a></button>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
