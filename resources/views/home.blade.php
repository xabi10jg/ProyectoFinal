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
                    E-mail: {{Auth()->user()->email}}<br>
                    <input type="button" name="editar" value="Editar">
                    <input type="button" name="eliminar" value="Eliminar">



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
