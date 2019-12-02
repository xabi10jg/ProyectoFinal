$(document).ready(function(){
    console.log("Probando");
	let nameMal = document.getElementById("NameMal");
 	let emailMal = document.getElementById("emailMal2");
    let passwordMal = document.getElementById("passwordMal");
    let passwordconfirmMal = document.getElementById("passwordConfirmMal");

  
  	nameMal.hidden = true;
  	emailMal.hidden = true;
    passwordMal.hidden = true;
    passwordconfirmMal.hidden = true;

  $('input').change(function(){
    comprobar();
  });

  function comprobar(){
    var bien = 0;
    var name = document.getElementById("name");
    var email = document.getElementById("email2");
    var password = document.getElementById("password");
    var passwordconfirm = document.getElementById('passwordConfirm');

    if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
        nameMal.hidden = false;
        bien--;
    }else{
      nameMal.hidden = true;
      bien++;
    }

    if (typeof email != "email" && email.value.length < 6 || email.value.length >= 50){
        emailMal.hidden = false;
        bien--;
    }else{
      emailMal.hidden = true;
      bien++;
    }

    if (typeof password != "string" && password.value.length < 7){
        passwordMal.hidden = false;
        bien--;
    }else{
      passwordMal.hidden = true;
      bien++;
    }

    if (typeof passwordConfirm != "string" && passwordconfirm.value.length < 7){
        passwordconfirmMal.hidden = false;
        bien--;
    }else{
      passwordconfirmMal.hidden = true;
      bien++;
    }

    if(bien === 4){
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