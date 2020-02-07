<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('/zonaAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="{{asset('/zonaAdmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: orange;" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
        <div class="sidebar-brand-icon">
          <i class="fas fa-paw text-gray-900"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-gray-900">Comanimals</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link text-gray-900" href="{{route('usersAdmin')}}">
          <i class="fas fa-users text-gray-900"></i>
          <span>Usuarios</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-gray-900" href="{{route('mascAdmin')}}">
          <i class="fas fa-paw text-gray-900"></i>
          <span>Mascotas</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-gray-900" href="{{route('orgAdmin')}}">
          <i class="fas fa-briefcase text-gray-900"></i>
          <span>Organizaciones</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item text-gray-900">
        <a class="nav-link collapsed text-gray-900" href="#" data-toggle="collapse" data-target="#collapseTwo"  aria-controls="collapseTwo" aria-haspopup="true" aria-expanded="false" v-pre>
          <i class="fas fa-fw fa-cog text-gray-900"></i>
          <span>Acciones</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones admin:</h6>
            <a class="collapse-item" href="{{route('org.create')}}">Crear Organizacion</a>
            <a class="collapse-item" href="{{route('peticiones')}}">Peticiones Organizacion</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: orange;">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          @guest 
            <li class="nav-item">
                <a class="nav-link"data-toggle="modal" data-target="#modalLoginForm">@lang('Iniciar Sesión')</a>
            </li>
            @if(Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">@lang('Registrarse')</a>
              </li>
            @endif
          @else
            
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle text-gray-900" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('org.create')}}">@lang('Registrar Organizacion')</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
          @endguest
            <li class="nav-item">
              <a class="nav-link text-gray-900" href="{{ route('change_lang', ['locale' => 'es']) }}">ES </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-gray-900" href="{{ route('change_lang', ['locale' => 'en']) }}">EN</a>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->
    @yield('content')
    <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Comanimals 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/zonaAdmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/zonaAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/zonaAdmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/zonaAdmin/js/sb-admin-2.min.js')}}"></script>
  <script src="{{asset('/zonaAdmin/js/demo/datatables-demo.js')}}"></script>

  <!--Prueba tablas-->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

</body>
</html>
