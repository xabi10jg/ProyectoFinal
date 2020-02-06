@extends('layouts.nav')
@section('content')
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
                        <h2 class="section-heading text-uppercase">{{$refugio->name}}</h2>
                    </div>
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
                    <div class="text-black">
                        <div class="row col-lg-6 mx-auto">
                            <img class="card-img-top" src="{{$refugio->img}}">
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">Email: {{$refugio->email}}</div>
                            <div class="col-lg-6">@lang('Telefono'): {{$refugio->telefono}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Direccion'): {{$refugio->direccion}}</div>
                            <div class="col-lg-6">@lang('Localidad'): {{$refugio->localidad}}</div>
                        </div><br>
                        <div class="row col-lg-12 mx-auto">
                            <div class="col-lg-6">@lang('Pais'): {{$refugio->pais}}</div>
                            <div class="col-lg-6">Horario: Desde {{$refugio->horarioApertura}} hasta {{$refugio->horarioCierre}}</div>
                        </div>
                        <section class="page-section2" id="portfolio">
                        <div class="container">
                            <div class="row col-lg-12 justify-content-center">
                            @foreach($mascotas as $mascota)
                                <div class="col-md-4 col-sm-6 portfolio-item">
                                  <a class="portfolio-link" data-toggle="modal" href="#mascota{{$mascota->id}}">
                                    <div class="portfolio-hover">
                                      <div class="portfolio-hover-content">
                                        <i class="fas fa-plus fa-3x"></i>
                                      </div>
                                    </div>
                                    <img class="img-fluid d-block mx-auto" src="{{$mascota->img}}" alt="" width="100%" height="50%;">
                                  </a>
                                  <div class="portfolio-caption">
                                    <h4>{{$mascota->name}}</h4>
                                    <p class="text-muted">{{$mascota->raza}}</p>
                                  </div>
                                </div>
                            @endforeach
                            
                          </div>
                          <div class="row-lg-12">
                              <div id="chart" style="width: 100%; height: 500px;"></div>
                            </div>
                        </div>
                        
                        </section>
                        <!--Modal-->
                        @foreach($mascotas as $mascota)
                        <div class="portfolio-modal modal fade" id="mascota{{$mascota->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                  <div class="rl"></div>
                                </div>
                              </div>
                              <div class="container">
                                <div class="row">
                                  <div class="col-lg-8 mx-auto">
                                    <div class="modal-body">
                                      <!-- Project Details Go Here -->
                                      <h2 class="text-uppercase">{{$mascota->name}}</h2>
                                      <p class="item-intro text-muted">{{$mascota->raza}}</p>
                                      <img class="img-fluid d-block mx-auto" src="{{$mascota->img}}" alt="">
                                      <p>{{$mascota->descripcion}}</p>
                                      <ul class="list-inline">
                                        <li>{{$mascota->fecha_nacimiento}}</li>
                                        @isset($mascota->organizacion)
                                          <li>{{$mascota->organizacion->name}}</li>
                                        @endisset
                                        @isset($mascota->usuario->name)
                                          <li>{{$mascota->usuario->name}}</li>
                                        @endisset
                                        <li>{{$mascota->raza}}</li>
                                      </ul>
                                        @if(Auth::user()->id != $refugio->encargado_id)
                                            <a class="btn btn-primary" href="">Solicitar Adopcion</a>
                                        @endif
                                        @if(Auth::user()->id === $refugio->encargado_id)
                                            <a class="btn btn-primary" href="{{route('mascotas.edit',$mascota->id)}}"><i class="fas fa-pencil-alt"></i>
                                                @lang('Editar')</a>
                                                <form style="display:inline" action="{{  route('mascotas.destroy',$mascota->id) }}" method="POST">
                                                 @method('DELETE')
                                                 @csrf
                                              <button class="btn btn-primary" type="submit">
                                                <i class="fas fa-trash"></i>
                                                @lang('Eliminar')</button></form>
                                              <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                <i class="fas fa-times"></i>
                                                @lang('Cerrar')</button>
                                        @endif
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</header>
<script type="text/javascript">
    $(document).ready(function(){
        
        var options = {
          title: 'Mascotas en Refugio',
          hAxis: {title: 'Mes',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };
          let datos = [['Mes', 'Mascotas']];
          //llamada a la API pasando el parametro del refugio
          $.get("http://127.0.0.1:8000/api/apiRefugios/{{$refugio->id}}", function (info, status){
            console.log(info.length);
            if(status === "success"){
              for(let i = 0; i < info.length; i++){
                console.log(info[i].mes);
                //switch para introducir los nombres de los meses en el array datos
                switch(i) {
                  case 0:
                    datos.push(['Enero',parseInt(info[i].mascotas)]);
                    break;
                  case 1:
                    datos.push(['Febrero',parseInt(info[i].mascotas)]);
                    break;
                  case 2:
                    datos.push(['Marzo',parseInt(info[i].mascotas)]);
                    break;
                  case 3:
                    datos.push(['Abril',parseInt(info[i].mascotas)]);
                    break;
                  case 4:
                    datos.push(['Mayo',parseInt(info[i].mascotas)]);
                    break;
                  case 5:
                    datos.push(['Junio',parseInt(info[i].mascotas)]);
                    break;
                  case 6:
                    datos.push(['Julio',parseInt(info[i].mascotas)]);
                    break;
                  case 7:
                    datos.push(['Agosto',parseInt(info[i].mascotas)]);
                    break;
                  case 8:
                    datos.push(['Septiembre',parseInt(info[i].mascotas)]);
                    break;
                  case 9:
                    datos.push(['Octubre',parseInt(info[i].mascotas)]);
                    break;
                  case 10:
                    datos.push(['Noviembre',parseInt(info[i].mascotas)]);
                    break;
                  case 11:
                    datos.push(['Diciembre',parseInt(info[i].mascotas)]);
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
              var chart = new google.visualization.AreaChart(document.getElementById('chart'));
              chart.draw(data, options);
            }
          }).fail(function () {
            console.log('Error');
          });
        
      });
      </script>
@endsection
</body>
</html>