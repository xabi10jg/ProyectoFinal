$(document).ready(function(){
 	let emailMal = document.getElementById("emailMal3");
  let passwordMal = document.getElementById("passwordMal3");

  	emailMal.hidden = true;
    passwordMal.hidden = true;

  $('input').keyup(function(){
    comprobar();
  });

  $('input').focusout(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    var email = document.getElementById("emailI");
    var password = document.getElementById("passwordI").value;

    if (typeof email != "email" && email.value.length < 6 || email.value.length >= 50){
        emailMal.hidden = false;
        bien--;
    }else{
      emailMal.hidden = true;
      bien++;
    }

    if (typeof password != "string" || password.length < 8){
        passwordMal.hidden = false;
        bien--;
    }else{
      passwordMal.hidden = true;
      bien++;
    }


    if(bien === 2){
      EnableSubmit();
    }else{
      DisableSubmit();
    }
  }

  function EnableSubmit(){
    document.getElementById("submitI").disabled = false;
  }

  function DisableSubmit(){
    document.getElementById("submitI").disabled = true;
  }
	        
});