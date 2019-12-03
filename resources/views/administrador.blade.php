<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>View Administrador</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  @extends('layouts.app')

  <!-- Header -->
  <header class="masthead">
    <section class="page-section">
      <div class="container">
        <div class="row">
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
    </section>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/validacion.js"></script>
  <!-- 
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  -->
  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
