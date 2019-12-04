$(document).ready(function(){
	let nameMal = document.getElementById("nameMal");
 	let emailMal = document.getElementById("emailMal2");
  let passwordMal = document.getElementById("passwordMal2");
  let passwordconfirmMal = document.getElementById("passwordconfirmMal2");

  
  	nameMal.hidden = true;
  	emailMal.hidden = true;
    passwordMal.hidden = true;
    passwordconfirmMal.hidden = true;

  $('input').change(function(){
    comprobar();
  });

  function comprobar(){
    console.log("Entra");
    var bien = 0;
    var name = document.getElementById("nameR");
    var email = document.getElementById("emailR");
    var password = document.getElementById("passwordR");
    var passwordconfirm = document.getElementById('password-confirmR');

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

    if (passwordconfirm != password){
        passwordconfirmMal.hidden = false;
        bien--;
    }else{
      passwordconfirmMal.hidden = true;
      bien++;
    }

    if(bien === 4){
      console.log("Funciona");
      EnableSubmit();
    }else{
      console.log("No funciona");
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