$(document).ready(function(){
    let nameMal = document.getElementById("nameMal");
    let apellidoMal = document.getElementById("apellidoMal");
    let emailMal = document.getElementById("emailMal");
    let direccionMal = document.getElementById("direccionMal");
    let localidadMal = document.getElementById("localidadMal");
    let provinciaMal = document.getElementById("provinciaMal");
    let paisMal = document.getElementById("paisMal");
    let tlfMal = document.getElementById("tlfMal");

    nameMal.hidden = true;
    apellidoMal.hidden = true;
    emailMal.hidden = true;
    direccionMal.hidden = true;
    localidadMal.hidden = true;
    provinciaMal.hidden = true;
    paisMal.hidden = true;
    tlfMal.hidden = true;
  
      $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nameR");
      var apellido = document.getElementById("apellidoR");
      var email = document.getElementById("emailR");
      var direccion = document.getElementById("direccionR");
      var localidad = document.getElementById("localidadR");
      var provincia = document.getElementById("provinciaR");
      var pais = document.getElementById("paisR");
      var tlf = document.getElementById("tlfR");
      var emailReg = /.+[@].+[\.].+/g;
      var tlfReg = /^[\d]{3}[-]*([\d]{2}[-]*){2}[\d]{2}$/;
  
        if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
            nameMal.hidden = false;
            bien--;
        }else{
            nameMal.hidden = true;
            bien++;
        }
        if (typeof apellido != "string" && apellido.value.length < 3 || apellido.value.length >= 50){
            apellidoMal.hidden = false;
            bien--;
        }else{
            apellidoMal.hidden = true;
            bien++;
        }
        if (email.value.length >= 6 && email.value.length <= 50 && email.value.match(emailReg)){
            console.log(email.value.match(emailReg));
              emailMal.hidden = true;
              bien++;
        }else{
            emailMal.hidden = false;
            bien--;
        }
        if(typeof direccion != "string" && direccion.value.length < 3 || direccion.value.length >= 50){
            direccionMal.hidden = false;
            bien--;
        }else{
            direccionMal.hidden = true;
            bien++;
        }
        if(typeof localidad != "string" && localidad.value.length < 3 || localidad.value.length >= 50){
            localidadMal.hidden = false;
            bien--;
        }else{
            localidadMal.hidden = true;
            bien++;
        }
        if(typeof provincia != "string" && provincia.value.length < 3 || provincia.value.length >= 50){
            provinciaMal.hidden = false;
            bien--;
        }else{
            provinciaMal.hidden = true;
            bien++;
        }
        if(typeof pais != "string" && pais.value.length < 3 || pais.value.length >= 50){
            paisMal.hidden = false;
            bien--;
        }else{
            paisMal.hidden = true;
            bien++;
        }
        if(tlf.value.match(tlfReg)){
            console.log(tlf.value.match(tlfReg));
            tlfMal.hidden = true;
            bien++;
        }else{
            tlfMal.hidden = false;
            bien--;
        }
        if(bien === 8){
            EnableSubmit();
        }else{
            DisableSubmit();
        }
    }
    function EnableSubmit(){
      document.getElementById("submitR").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitR").disabled = true;
    }
              
  });