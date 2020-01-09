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
                        Nombre: <br>
                        Email: <br>
                        TLF: <br>
                        Direccion: <br>
                        Localidad: <br>
                        Provincia: <br>
                        Pais: <br>
                        Encargado: <br>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>