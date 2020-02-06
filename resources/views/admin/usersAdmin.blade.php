@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Usuarios</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Rol</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Localidad</th>
              <th>Provincia</th>
              <th>Pais</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->roles->rol}}</td>
            <td>{{$user->telefono}}</td>
            <td>{{$user->direccion}}</td>
            <td>{{$user->localidad}}</td>
            <td>{{$user->provincia}}</td>
            <td>{{$user->pais}}</td>
            <td><a class="btn btn-warning text-gray-900" href="{{route('FormularioEditar', $user->id)}}">Editar</a></td>
            <td>
              <button class="btn btn-warning text-gray-900" id="EliminarPerfil">
                <a class="text-gray-900" href="{{route('EliminarUsuario', $user->id)}}">Eliminar</a>
              </button>
            </td>
          </tr>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row-lg-12">
      <div class="col-lg-6"><input type="number" id="year" name="year"></div>
      <div class="col-lg-6"><button id="buscar">Buscar</button></div>
    </div>
    <div class="row-lg-12">
      <div id="chart_div" style="width: 100%; height: 500px;"></div>
    </div>
  </div>
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
          $.get("http://127.0.0.1:8000/api/apiUserYear/"+year.value, function (info, status){
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
@endsection