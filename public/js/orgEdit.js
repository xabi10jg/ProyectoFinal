$(document).ready(function(){
    let nombreMal = document.getElementById("nombreMalOEA");
    let emailMal = document.getElementById("emailMalOEA");
    let direccionMal = document.getElementById("direccionMalOEA");
    let localidadMal = document.getElementById("localidadMalOEA");
    let provinciaMal = document.getElementById("provinciaMalOEA");
    let paisMal = document.getElementById("paisMalOEA");
    let telefonoMal = document.getElementById("telefonoMalOEA");
    let cifMal =document.getElementById("cifMalOEA");
  
    nombreMal.hidden = true;
    emailMal.hidden = true;
    direccionMal.hidden = true;
    localidadMal.hidden = true;
    provinciaMal.hidden = true;
    paisMal.hidden = true;
    telefonoMal.hidden = true;
    cifMal.hidden = true;
  
  
    $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nombreOEA");
      var email = document.getElementById("emailOEA");
      var direccion = document.getElementById("direccionOEA");
      var localidad = document.getElementById("localidadOEA");
      var provincia = document.getElementById("provinciaOEA");
      var pais = document.getElementById("paisOEA");
      var telefono = document.getElementById("telefonoOEA");
      var cif = document.getElementById("cifOEA");
      var emailReg = /.+[@].+[\.].+/g;
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nombreMal.hidden = false;
          bien--;
      }else{
        nombreMal.hidden = true;
        bien++;
      }
      //valida si el email esta entre 6 y 50 caracteres ambos incluidos y con el match si cumple la regular expresion
      if (email.value.length >= 6 && email.value.length <= 50 && email.value.match(emailReg)){
            emailMal.hidden = true;
            bien++;
      }else{
          emailMal.hidden = false;
          bien--;

      }

      if (typeof direccion != "string" && direccion.value.length < 3 || direccion.value.length >= 50){
        direccionMal.hidden = false;
        bien--;
      }else{
        direccionMal.hidden = true;
        bien++;
      }

      if (typeof localidad != "string" && localidad.value.length < 3 || localidad.value.length >= 50){
        localidadMal.hidden = false;
        bien--;
      }else{
        localidadMal.hidden = true;
        bien++;
      }

      if (typeof provincia != "string" && provincia.value.length < 3 || provincia.value.length >= 50){
        provinciaMal.hidden = false;
        bien--;
      }else{
        provinciaMal.hidden = true;
        bien++;
      }

      if (typeof pais != "string" && pais.value.length < 3 || pais.value.length >= 50){
        paisMal.hidden = false;
        bien--;
      }else{
        paisMal.hidden = true;
        bien++;
      }

      if (typeof telefono != "string" && telefono.value.length < 3 || telefono.value.length >= 50){
        telefonoMal.hidden = false;
        bien--;
      }else{
        telefonoMal.hidden = true;
        bien++;
      }

      if (typeof cif != "string" && cif.value.length < 3 || cif.value.length >= 50){
        cifMal.hidden = false;
        bien--;
      }else{
        cifMal.hidden = true;
        bien++;
      }

      if(bien === 8){
        EnableSubmit();
      }else{
        DisableSubmit();
      }
    }

    function EnableSubmit(){
      document.getElementById("submitOEA").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitOEA").disabled = true;
    }
              
  });