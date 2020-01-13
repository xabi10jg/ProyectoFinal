$(document).ready(function(){
  $('#users').css("display", "block");
  $('#mascotas').css("display", "none");
  $('#hoteles').css("display", "none");
  $('#refugios').css("display", "none");
  $('#veterinarios').css("display", "none");
  $('#centros').css("display", "none");
  $('#protectoras').css("display", "none");

  //funcion mostrar usuarios y ocultar el resto
 	$("#usu").click(function(){
    $('#users').css("display", "block");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar mascotas y ocultar el resto
  $("#masc").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "block");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar hoteles y ocultar el resto
  $("#hot").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "block");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar refugios y ocultar el resto
  $("#ref").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "block");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar veterinarios y ocultar el resto
  $("#vet").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "block");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar centros acogida y ocultar el resto
  $("#aco").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "block");
    $('#protectoras').css("display", "none");
  });

  //funcion mostrar protectoras y ocultar el resto
  $("#pro").click(function(){
    $('#users').css("display", "none");
    $('#mascotas').css("display", "none");
    $('#hoteles').css("display", "none");
    $('#refugios').css("display", "none");
    $('#veterinarios').css("display", "none");
    $('#centros').css("display", "none");
    $('#protectoras').css("display", "block");
  });
	        
});