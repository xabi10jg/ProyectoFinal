@extends('layouts.admin')
@section('content')
<div class="card shadow mb-4  text-gray-900">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold">Organizaciones</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table id="example" class="display responsive nowrap" style="width:100%">
        <thead>
            <tr>
              <th>@lang('Nombre')</th>
              <th>CIF</th>
              <th>Email</th>
              <th>Tipo</th>
              <th>Encargado</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Localidad</th>
              <th>Provincia</th>
              <th>Pais</th>
              <th>Horario Cierre</th>
              <th>Horario Apertura</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
          @foreach($organizaciones as $org)
          <tr>
            <td>{{$org->name}}</td>
            <td>{{$org->CIF}}</td>
            <td>{{$org->email}}</td>
            <td>{{$org->tipo->name}}</td>
            <td>{{$org->encargado->name}}</td>
            <td>{{$org->telefono}}</td>
            <td>{{$org->direccion}}</td>
            <td>{{$org->localidad}}</td>
            <td>{{$org->provincia}}</td>
            <td>{{$org->pais}}</td>
            <td>{{$org->horarioApertura}}</td>
            <td>{{$org->horarioCierre}}</td>
            <td><a class="btn btn-warning text-gray-900" href="{{route('org.edit',$org->id)}}">Editar</a></td>
            <td>
              <form action="{{route('org.destroy',$org->id)}}" method="post">
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
    
    <script type="text/javascript">
    $(document).ready(function(){
      
      let year = document.getElementById("year");
      let buscar = document.getElementById("buscar");

        var options = {
          title: 'Organizaciones registradas',
          hAxis: {title: 'Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        buscar.onclick = function(){
          console.log(typeof(year.value));
          let datos = [['Mes', 'Organizaciones']];
          //llamada a la API pasando el parametro del año
          $.get("http://127.0.0.1:8000/api/apiOrgYear/"+year.value, function (info, status){
            console.log(info);
            if(status === "success"){
              for(let i = 0; i < info.length; i++){
                console.log(info[i].mes);
                //switch para introducir los nombres de los meses en el array datos
                switch(i) {
                  case 0:
                    datos.push(['Enero',info[i].org]);
                    break;
                  case 1:
                    datos.push(['Febrero',info[i].org]);
                    break;
                  case 2:
                    datos.push(['Marzo',info[i].org]);
                    break;
                  case 3:
                    datos.push(['Abril',info[i].org]);
                    break;
                  case 4:
                    datos.push(['Mayo',info[i].org]);
                    break;
                  case 5:
                    datos.push(['Junio',info[i].org]);
                    break;
                  case 6:
                    datos.push(['Julio',info[i].org]);
                    break;
                  case 7:
                    datos.push(['Agosto',info[i].org]);
                    break;
                  case 8:
                    datos.push(['Septiembre',info[i].org]);
                    break;
                  case 9:
                    datos.push(['Octubre',info[i].org]);
                    break;
                  case 10:
                    datos.push(['Noviembre',info[i].org]);
                    break;
                  case 11:
                    datos.push(['Diciembre',info[i].org]);
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
  </div>
</div>
@endsection