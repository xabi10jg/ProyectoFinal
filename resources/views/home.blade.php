@extends('layouts.nav')

<header class="masthead">
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
                        E-mail: {{Auth()->user()->email}}<br>
                        <input type="button" name="editar" value="Editar">
                        <input type="button" name="eliminar" value="Eliminar">
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@extends('layouts.scriptsBody')

</body>

</html>