  <!-- Navigation -->
  @extends('layouts.nav')

  <!-- Header -->
  
  <header class="masthead">
    <section class="page-section">
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                  <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">@lang('Perfil Admin')</h2>
                  </div>
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Rol')</th>
                    </tr>
                    <tr>
                      <td class="col-md-4">{{Auth()->user()->name}}</td>
                      <td class="col-md-4">{{Auth()->user()->email}}</td>
                      <td class="col-md-4">{{Auth()->user()->role_id}}</td>
                    </tr>
                  </table>
                  <br>
                  <table class="col-lg-12 text-center">
                    <tr>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal1">Ver Usuarios</a></td>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal2">Ver Centros Acogida</a></td>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal3">Ver Hoteles</a></td>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal4">Ver Veterinarios</a></td>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal5">Ver Protectoras</a></td>
                      <td class="col-md-4"><a class="portfolio-link" data-toggle="modal" href="#Modal6">Ver Refugios</a></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!-- Modal usuarios -->
    <div class="portfolio-modal modal fade" id="Modal1" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Rol')</th>
                    </tr>
                  @foreach($users as $user)
                    <tr>
                      <td class="col-md-4">{{$user->name}}</td>
                      <td class="col-md-4">{{$user->email}}</td>
                      <td class="col-md-4">{{$user->roles->rol}}</td>
                      <td class="col-md-4"><a href="{{route('admin.editUser', $user->id)}}">Editar</a></td>
                      <td class="col-md">
                        <form action="{{route('admin.destroyUser', $user->id)}}" method="post">
                          @method('DELETE')
                          @csrf
                          <input type="submit" value="Eliminar">
                        </form>
                      </td>
                    </tr>
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Acogidas-->
    <div class="portfolio-modal modal fade" id="Modal2" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Tipo')</th>
                    </tr>
                  @foreach($organizaciones as $org)
                    @if($org->tipo_id === 4)
                    <tr>
                      <td class="col-md-4">{{$org->name}}</td>
                      <td class="col-md-4">{{$org->email}}</td>
                      <td class="col-md-4">{{$org->tipo->name}}</td>
                      <td class="col-md-4">Editar</td>
                      <td class="col-md">Eliminar</td>
                    </tr>
                    @endif
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Hoteles-->
    <div class="portfolio-modal modal fade" id="Modal3" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Tipo')</th>
                    </tr>
                  @foreach($organizaciones as $org)
                    @if($org->tipo_id === 1)
                    <tr>
                      <td class="col-md-4">{{$org->name}}</td>
                      <td class="col-md-4">{{$org->email}}</td>
                      <td class="col-md-4">{{$org->tipo->name}}</td>
                      <td class="col-md-4">Editar</td>
                      <td class="col-md">Eliminar</td>
                    </tr>
                    @endif
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Veterinarios-->
    <div class="portfolio-modal modal fade" id="Modal4" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Tipo')</th>
                    </tr>
                  @foreach($organizaciones as $org)
                    @if($org->tipo_id === 3)
                    <tr>
                      <td class="col-md-4">{{$org->name}}</td>
                      <td class="col-md-4">{{$org->email}}</td>
                      <td class="col-md-4">{{$org->tipo->name}}</td>
                      <td class="col-md-4">Editar</td>
                      <td class="col-md">Eliminar</td>
                    </tr>
                    @endif
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Protectora-->
    <div class="portfolio-modal modal fade" id="Modal5" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Tipo')</th>
                    </tr>
                  @foreach($organizaciones as $org)
                    @if($org->tipo_id === 5)
                    <tr>
                      <td class="col-md-4">{{$org->name}}</td>
                      <td class="col-md-4">{{$org->email}}</td>
                      <td class="col-md-4">{{$org->tipo->name}}</td>
                      <td class="col-md-4">Editar</td>
                      <td class="col-md">Eliminar</td>
                    </tr>
                    @endif
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Modal Protectora-->
    <div class="portfolio-modal modal fade" id="Modal6" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <table class="col-lg-12 text-center">
                    <tr>
                      <th class="col-md-4">@lang('Nombre')</th>
                      <th class="col-md-4">Email</th>
                      <th class="col-md-4">@lang('Tipo')</th>
                    </tr>
                  @foreach($organizaciones as $org)
                    @if($org->tipo_id === 2)
                    <tr>
                      <td class="col-md-4">{{$org->name}}</td>
                      <td class="col-md-4">{{$org->email}}</td>
                      <td class="col-md-4">{{$org->tipo->name}}</td>
                      <td class="col-md-4">Editar</td>
                      <td class="col-md">Eliminar</td>
                    </tr>
                    @endif
                  @endforeach
                  </table>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    @lang('Cerrar')</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>

</html>
