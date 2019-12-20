$(document).ready(function(){
	let nameMal = document.getElementById("nameMal");
 	let emailMal = document.getElementById("emailMal2");
  let passwordMal = document.getElementById("passwordMal2");
  let passwordconfirmMal = document.getElementById("passwordconfirmMal2");

  
  	nameMal.hidden = true;
  	emailMal.hidden = true;
    passwordMal.hidden = true;
    passwordconfirmMal.hidden = true;

  $('input').keyup(function(){
    comprobar();
  });

  $('input').focusout(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    var name = document.getElementById("nameR");
    var email = document.getElementById("emailR");
    var password = document.getElementById("passwordR").value;
    var passwordconfirm = document.getElementById("password-confirmR").value;
    var emailReg = /.+[@].+[\.].+/g;

    if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
        nameMal.hidden = false;
        bien--;
    }else{
      nameMal.hidden = true;
      bien++;
    }
    //valida si el email esta entre 6 y 50 caracteres ambos incluidos y con el match si cumple la regular expresion
    if (email.value.length >= 6 && email.value.length <= 50 && email.value.match(emailReg)){
        console.log(email.value.match(emailReg));
          emailMal.hidden = true;
          bien++;
    }else{
        emailMal.hidden = false;
        bien--;

    }

    if (typeof password != "string" || password.length < 8){
        passwordMal.hidden = false;
        bien--;
    }else{
      passwordMal.hidden = true;
      bien++;
    }

    if (passwordconfirm === password){
        passwordconfirmMal.hidden = true;
        bien++;
      }else{
        passwordconfirmMal.hidden = false;
        bien--;
      }
/*
    if (typeof passwordconfirm != "string" && passwordconfirm.value.length < 8){
      console.log("Entra password mal");
        passwordMal.hidden = false;
        bien--;
    }else{
      if (passwordconfirm === password){
        console.log("Entra password bien");
        passwordconfirmMal.hidden = true;
        bien++;
      }else{
        console.log("La contraseña no es igual");
        passwordconfirmMal.hidden = false;
        bien--;
      }
    }*/

    

    if(bien === 4){
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