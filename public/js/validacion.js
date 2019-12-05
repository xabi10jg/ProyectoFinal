$(document).ready(function(){
	let nombreMal = document.getElementById("nombreMal");
 	let emailMal = document.getElementById("emailMal");
  	let mensajeMal = document.getElementById("mensajeMal");
  
  	nombreMal.hidden = true;
  	emailMal.hidden = true;
  	mensajeMal.hidden = true;

  $('input').keyup(function(){
    comprobar();
  });

  $('input').focusout(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    var nombre = document.getElementById("nombre");
    var email = document.getElementById("email");
    var mensaje = document.getElementById("mensaje");

    if (typeof nombre != "string" && nombre.value.length < 3 || nombre.value.length >= 50){
        nombreMal.hidden = false;
        bien--;
    }else{
      nombreMal.hidden = true;
      bien++;
    }

    if (typeof email != "email" && email.value.length < 6 || email.value.length >= 50){
        emailMal.hidden = false;
        bien--;
    }else{
      emailMal.hidden = true;
      bien++;
    }

    if (typeof mensaje != "string" && mensaje.value.length === 0 || mensaje.value.length >= 255){
        mensajeMal.hidden = false;
        bien--;
    }else{
      mensajeMal.hidden = true;
      bien++;
    }

    if(bien === 3){
      EnableSubmit();
    }else{
      DisableSubmit();
    }
  }

  function EnableSubmit(){
    document.getElementById("submit").disabled = false;
  }

  function DisableSubmit(){
    document.getElementById("submit").disabled = true;
  }
	        
});