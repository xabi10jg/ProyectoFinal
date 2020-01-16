@extends('layouts.nav')
@section('content')
<header class="masthead">
  <section class="page-section">
    <div class="container">  
      <h1 class="intro-heading text-uppercase">{{$veterinario->name}}<img src="{{$veterinario->img}} "width="60px"></h1> 
        @auth
        @if(Auth::user()->id===$veterinario->encargado_id)
            <div class="d-flex flex-row" style="margin-bottom:-100px; margin-top: 40px;">
                <div class="col-lg-12">
                      <a class="btn btn-primary" href="{{route('mascotas.create')}}">Editar veterinario</a>
                </div>
            </div>
        @endif
        @endauth
      <div class="intro-text text-dark">
        <div class="d-flex justify-content-around flex-wrap">
          <div class="col-lg-10" id="mapid"></div>
          <div class="col-lg-5 text-center">
            <div class="newcard margincard">
              <div class="card-body">
                <h2 class="section-heading text-uppercase text-dark">@lang('Información')</h2>
                <p>Email: {{$veterinario->email}}</p>
                <p>Dirección: {{$veterinario->direccion}}</p>
                <p>Localidad: {{$veterinario->localidad}}</p>
                <p>Provincia: {{$veterinario->Provincia}}</p>
                <p>Pais: {{$veterinario->pais}}</p>
                <p>Telefono: {{$veterinario->telefono}}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 text-center">
            <div class="newcard margincard">
              <div class="card-body">
                <h2 class="section-heading text-uppercase text-dark">@lang('Horario')</h2><hr>
                <p>Horario: Desde {{$veterinario->horarioApertura}} hasta {{$veterinario->horarioCierre}}</p>      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<script>
    var mymap = L.map('mapid').setView([43.32349297826428, -1.94459107539383], 15);
    /*L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(mymap);*/

var baselayer = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets',
  }).addTo(mymap);

var toplayer = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
      '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
      'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox.streets-satellite',
  });

  var layers = {
    'Basico': baselayer,
    'Satelite': toplayer
  };

  L.control.layers(layers).addTo(mymap);


   </script>
@endsection

</body>

</html>