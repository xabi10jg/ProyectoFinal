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
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
  @extends('layouts.scriptsBody')

</body>

</html>
