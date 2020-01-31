@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="row-lg text-center">
    <div class="card col-lg-4 float-left text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Usuarios</h4>
        <p class="card-text">{{$users->count()}}</p>
        <a href="{{route('usersAdmin')}}" class="btn btn-warning text-gray-900">Ver Usuarios</a>
      </div>
    </div>
    <div class="card col-lg-4 float-left text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Masctoas</h4>
        <p class="card-text">{{$mascotas->count()}}</p>
        <a href="{{route('mascAdmin')}}" class="btn btn-warning text-gray-900">Ver Mascotas</a>
      </div>
    </div>
    <div class="card col-lg-4 text-gray-900">
      <div class="card-body">
        <h4 class="card-title">Organizaciones</h4>
        <p class="card-text">{{$organizaciones->count()}}</p>
        <a href="{{route('orgAdmin')}}" class="btn btn-warning text-gray-900">Ver Organizaciones</a>
      </div>
    </div>
    <div class="row-lg-12">
      <div class="col-lg-6"><input type="number" id="year" name="year"></div>
      <div class="col-lg-6"><button id="buscar">Buscar</button></div>
    </div>
    <div class="row-lg-12">
      <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
    
    <script type="text/javascript">
    $(document).ready(function(){
      
      let year = document.getElementById("year");
      let buscar = document.getElementById("buscar");

        var options = {
          title: 'Usuarios registrados',
          hAxis: {title: 'Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        buscar.onclick = function(){
          console.log(typeof(year.value));
          let datos = [['Mes', 'Usuarios']];
          //llamada a la API pasando el parametro del año
          $.get("http://comanimals.herokuapp.com/api/apiUserYear/"+year.value, function (info, status){
            console.log(info);
            if(status === "success"){
              for(let i = 0; i < info.length; i++){
                console.log(info[i].mes);
                //switch para introducir los nombres de los meses en el array datos
                switch(i) {
                  case 0:
                    datos.push(['Enero',info[i].usuarios]);
                    break;
                  case 1:
                    datos.push(['Febrero',info[i].usuarios]);
                    break;
                  case 2:
                    datos.push(['Marzo',info[i].usuarios]);
                    break;
                  case 3:
                    datos.push(['Abril',info[i].usuarios]);
                    break;
                  case 4:
                    datos.push(['Mayo',info[i].usuarios]);
                    break;
                  case 5:
                    datos.push(['Junio',info[i].usuarios]);
                    break;
                  case 6:
                    datos.push(['Julio',info[i].usuarios]);
                    break;
                  case 7:
                    datos.push(['Agosto',info[i].usuarios]);
                    break;
                  case 8:
                    datos.push(['Septiembre',info[i].usuarios]);
                    break;
                  case 9:
                    datos.push(['Octubre',info[i].usuarios]);
                    break;
                  case 10:
                    datos.push(['Noviembre',info[i].usuarios]);
                    break;
                  case 11:
                    datos.push(['Diciembre',info[i].usuarios]);
                    break;
                  default:
                    break;
                }
              }
            }
              //crea y dibuja el formulario con los datos
              google.charts.load('current', {'packages':['corechart']});
              google.charts.setOnLoadCallback(drawChart);
              function drawChart(){
              var data = google.visualization.arrayToDataTable(datos);
              var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
              chart.draw(data, options);
            }
          }).fail(function () {
            console.log('Error');
          });
        }
      });
      </script>
    <hr>
  </div>
</div>
@endsection
  