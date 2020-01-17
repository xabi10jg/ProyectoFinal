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
                        <h2 class="section-heading text-uppercase">{{$hotel->name}}</h2>
                    </div>
                    <img src="{{$hotel->img}}">
                    <hr>
                    <div class="prueba">
                        Email: {{$hotel->email}}<br>
                        TLF: {{$hotel->telefono}}<br>
                        Direccion: {{$hotel->direccion}}<br>
                        Localidad: {{$hotel->localidad}}<br>
                        Provincia: {{$hotel->provincia}}<br>
                        Pais: {{$hotel->pais}}<br>
                        Encargado: {{$hotel->encargado->name}}<br>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>