@extends('layouts.nav')
@section('content') 
    <header class="masthead">
        <section class="page-section">
            <div class="container">
                
                <div class="row justify-content-center">
                    <div class="col-md-8">    
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
                    
                    <div class="row justify-content-center  text-dark">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{$refugio->name}}
                                    </h5>
                                    <p>Email: {{$refugio->email}}</p>
                                    <p>Dirección: {{$refugio->direccion}}</p>
                                    <p>Localidad: {{$refugio->localidad}}</p>
                                    <p>Provincia: {{$refugio->Provincia}}</p>
                                    <p>Pais: {{$refugio->pais}}</p>
                                    <p>Telefono: {{$refugio->telefono}}</p>
                                    <p>Horario: Desde {{$refugio->horarioApertura}} hasta {{$refugio->horarioCierre}}</p>
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

