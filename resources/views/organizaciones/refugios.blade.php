@extends('layouts.nav')
@section('content') 
    <header class="masthead">
        <div class="container">
            <div class="intro-text text-dark">
                <div class="row">
                    <div class="col-sm-12">
                    @foreach($refugios as $refugio)
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$refugio->name}}
                                    <img src="img/logos/katubihotz.jpg" width="40px">
                                </h5>
                                <p class="card-text">Katubihotz es una asociación creada para cuidar y controlar las colonias de gatos que viven en la calle y procurar una casa a nuestros felinos a través de la adopción.</p>
                                <button type="button" class="btn btn-primary">
                                    Launch demo modal
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </header>
    
    <p>{{$refugios}}</p>

    @endsection

</body>

</html>

