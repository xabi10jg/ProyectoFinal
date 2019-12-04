<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuario Estandar</title>
</head>
<body>

	<form method="post" action="{{route('ConfirmarEdicion')}}">
		
		@csrf

		Nombre: <input type="text" name="nombre" value="{{Auth()->user()->name}}"><br>
		Apellido: <input type="text" name="apellido" value="{{Auth()->user()->apellido}}"><br>
		Email: <input type="text" name="email" value="{{Auth()->user()->email}}"><br>
		Dirección: <input type="text" name="direccion" value="{{Auth()->user()->direccion}}"><br>
		Localidad: <input type="text" name="localidad" value="{{Auth()->user()->localidad}}"><br>
		Provincia: <input type="text" name="provincia" value="{{Auth()->user()->provincia}}"><br>
		País: <input type="text" name="pais" value="{{Auth()->user()->pais}}"><br>
		Teléfono: <input type="text" name="telefono" value="{{Auth()->user()->telefono}}"><br>
		<input type="submit" name="confirmarcambios" value="Confirmar">


	</form>

</body>
</html>