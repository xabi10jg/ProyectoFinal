@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Mascotas</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>Fecha Nacimiento</th>
              <th>Raza</th>
              <th>Propietario</th>
              <th>Organizacion</th>
              <th>Descripcion</th>
              <th>Imagen</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($mascotas as $mascota)
          <tr>
            <td>{{$mascota->name}}</td>
            <td>{{$mascota->fecha_nacimiento}}</td>
            <td>{{$mascota->raza}}</td>
            @isset($mascota->usuario->name)
              <td>{{$mascota->usuario->name}}</td>
            @else
              <td>No tiene</td>
            @endisset
            @isset($mascota->organizacion->name)
              <td>{{$mascota->organizacion->name}}</td>
            @else
              <td>No tiene</td>
            @endisset
            @isset($mascota->descripcion)
              <td>{{$mascota->descripcion}}</td>
            @else
              <td>No tiene</td>
            @endisset
            <td>{{$mascota->img}}</td>
            <td><a class="btn btn-warning text-gray-900" href="{{route('mascotas.edit',$mascota->id)}}">Editar</a></td>
            <td>
              <form action="{{route('mascotas.destroy',$mascota->id)}}" method="post">
                @method('DELETE')
                @csrf
                <input class="btn btn-warning text-gray-900" type="submit" value="Eliminar">
              </form>
            </td>
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
          title: 'Mascotas registrados',
          hAxis: {title: 'Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        buscar.onclick = function(){
          console.log(typeof(year.value));
          let datos = [['Mes', 'Mascotas']];
          //llamada a la API pasando el parametro del año
          $.get("http://comanimals.herokuapp.com/api/apiMascYear/"+year.value, function (info, status){
            console.log(info);
            if(status === "success"){
              for(let i = 0; i < info.length; i++){
                console.log(info[i].mes);
                //switch para introducir los nombres de los meses en el array datos
                switch(i) {
                  case 0:
                    datos.push(['Enero',info[i].mascota]);
                    break;
                  case 1:
                    datos.push(['Febrero',info[i].mascota]);
                    break;
                  case 2:
                    datos.push(['Marzo',info[i].mascota]);
                    break;
                  case 3:
                    datos.push(['Abril',info[i].mascota]);
                    break;
                  case 4:
                    datos.push(['Mayo',info[i].mascota]);
                    break;
                  case 5:
                    datos.push(['Junio',info[i].mascota]);
                    break;
                  case 6:
                    datos.push(['Julio',info[i].mascota]);
                    break;
                  case 7:
                    datos.push(['Agosto',info[i].mascota]);
                    break;
                  case 8:
                    datos.push(['Septiembre',info[i].mascota]);
                    break;
                  case 9:
                    datos.push(['Octubre',info[i].mascota]);
                    break;
                  case 10:
                    datos.push(['Noviembre',info[i].mascota]);
                    break;
                  case 11:
                    datos.push(['Diciembre',info[i].mascota]);
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