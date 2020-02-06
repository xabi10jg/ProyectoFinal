$(document).ready(function(){
    let nombreMalUA = document.getElementById("nombreMalUA");
    let apellidoMalUA = document.getElementById("apellidoMalUA");
    let emailMalUA = document.getElementById("emailMalUA");
    let direccionMalUA = document.getElementById("direccionMalUA");
    let localidadMalUA = document.getElementById("localidadMalUA");
    let provinciaMalUA = document.getElementById("provinciaMalUA");
    let paisMalUA = document.getElementById("paisMalUA");
    let telefonoMalUA = document.getElementById("telefonoMalUA");
  
    nombreMalUA.hidden = true;
    apellidoMalUA.hidden = true;
    emailMalUA.hidden = true;
    direccionMalUA.hidden = true;
    localidadMalUA.hidden = true;
    provinciaMalUA.hidden = true;
    paisMalUA.hidden = true;
    telefonoMalUA.hidden = true;
  
  
    $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nombreUA");
      var apellido = document.getElementById("apellidoUA");
      var email = document.getElementById("emailUA");
      var direccion = document.getElementById("direccionUA");
      var localidad = document.getElementById("localidadUA");
      var provincia = document.getElementById("provinciaUA");
      var pais = document.getElementById("paisUA");
      var telefono = document.getElementById("telefonoUA");
      var emailReg = /.+[@].+[\.].+/g;
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nombreMalUA.hidden = false;
          bien--;
      }else{
        nombreMalUA.hidden = true;
        bien++;
      }

      if (typeof apellido != "string" && apellido.value.length < 3 || apellido.value.length >= 50){
          apellidoMalUA.hidden = false;
          bien--;
      }else{
        apellidoMalUA.hidden = true;
        bien++;
      }
      //valida si el email esta entre 6 y 50 caracteres ambos incluidos y con el match si cumple la regular expresion
      if (email.value.length >= 6 && email.value.length <= 50 && email.value.match(emailReg)){
            emailMalUA.hidden = true;
            bien++;
      }else{
          emailMalUA.hidden = false;
          bien--;

      }

      if (typeof direccion != "string" && direccion.value.length < 3 || direccion.value.length >= 50){
        direccionMalUA.hidden = false;
        bien--;
      }else{
        direccionMalUA.hidden = true;
        bien++;
      }

      if (typeof localidad != "string" && localidad.value.length < 3 || localidad.value.length >= 50){
        localidadMalUA.hidden = false;
        bien--;
      }else{
        localidadMalUA.hidden = true;
        bien++;
      }

      if (typeof provincia != "string" && provincia.value.length < 3 || provincia.value.length >= 50){
        provinciaMalUA.hidden = false;
        bien--;
      }else{
        provinciaMalUA.hidden = true;
        bien++;
      }

      if (typeof pais != "string" && pais.value.length < 3 || pais.value.length >= 50){
        paisMalUA.hidden = false;
        bien--;
      }else{
        paisMalUA.hidden = true;
        bien++;
      }

      if (typeof telefono != "string" && telefono.value.length < 3 || telefono.value.length >= 50){
        telefonoMalUA.hidden = false;
        bien--;
      }else{
        telefonoMalUA.hidden = true;
        bien++;
      }

      if(bien === 8){
        EnableSubmit();
      }else{
        DisableSubmit();
      }
    }

    function EnableSubmit(){
      document.getElementById("submitUA").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitUA").disabled = true;
    }
              
  });