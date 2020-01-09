@extends('layouts.nav')
@section('content')

  <header class="masthead">
    <div class="container">
            
      <div class="intro-text">
        <h1 class="intro-heading text-uppercase">Nombre Veterinario</h1>
        <div class="d-flex justify-content-around flex-wrap">
        <div class="col-lg-10" id="mapid"></div>
        <div class="col-lg-5 text-center">
          <div class="newcard margincard">
            <div class="card-body">
              


              <h2 class="section-heading text-uppercase text-dark">@lang('Información')</h2><hr>

              <p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>                       
              

              </div>
            </div>
          </div>
        <div class="col-lg-5 text-center">
          <div class="newcard margincard">
            <div class="card-body">
              


              <h2 class="section-heading text-uppercase text-dark">@lang('Horario')</h2><hr>

              <p class="text-dark">@lang('Lunes a Viernes:')</p>
              <p class="text-dark">08:00-20:00</p>  
              <p class="text-dark">@lang('Sabados:')</p>  
              <p class="text-dark">10:00-19:00</p>                         
              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<script>
    var mymap = L.map('mapid').setView([43.385537, -1.949364], 10);
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