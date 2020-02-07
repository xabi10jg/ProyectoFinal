$(document).ready(function(){
    let nombreMalFE = document.getElementById("nombreMalFE");
    let emailMalFE = document.getElementById("emailMalFE");
    let cifMalFE = document.getElementById("cifMalFE");
  
    nombreMalFE.hidden = true;
    emailMalFE.hidden = true;
    cifMalFE.hidden = true;
  
  
    $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nombreFE");
      var email = document.getElementById("emailFE");
      var cif = document.getElementById("cifFE");
      var emailReg = /.+[@].+[\.].+/g;
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nombreMalFE.hidden = false;
          bien--;
      }else{
        nombreMalFE.hidden = true;
        bien++;
      }
      //valida si el email esta entre 6 y 50 caracteres ambos incluidos y con el match si cumple la regular expresion
      if (email.value.length >= 6 && email.value.length <= 50 && email.value.match(emailReg)){
            emailMalFE.hidden = true;
            bien++;
      }else{
          emailMalFE.hidden = false;
          bien--;

      }
      if (typeof cif != "string" && cif.value.length < 2 || cif.value.length >= 20){
        cifMalFE.hidden = false;
        bien--;
      }else{
        cifMalFE.hidden = true;
        bien++;
      }
      if(bien === 3){
        EnableSubmit();
      }else{
        DisableSubmit();
      }
    }

    function EnableSubmit(){
      document.getElementById("submitFE").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitFE").disabled = true;
    }
              
  });