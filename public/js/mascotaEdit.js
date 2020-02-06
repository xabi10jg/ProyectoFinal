$(document).ready(function(){
    let nameMalME = document.getElementById("nombreMalME");
    let razaMalME = document.getElementById("razaMalME");
    let descripcionMalME = document.getElementById("descMalME");
  
    nameMalME.hidden = true;
    razaMalME.hidden = true;
    descripcionMalME.hidden = true;
  
  
    $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nameME");
      var raza = document.getElementById("razaME");
      var descripcion = document.getElementById("descripcionME");
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nameMalME.hidden = false;
          bien--;
      }else{
        nameMalME.hidden = true;
        bien++;
      }
      if (typeof raza != "string" && raza.value.length < 3 || raza.value.length >= 50){
        razaMalME.hidden = false;
        bien--;
      }else{
        razaMalME.hidden = true;
        bien++;
      }
      if (typeof descripcion != "string" && descripcion.value.length < 3 || descripcion.value.length >= 50){
        descripcionMalME.hidden = false;
        bien--;
      }else{
        descripcionMalME.hidden = true;
        bien++;
      }
      if(bien === 3){
        EnableSubmit();
      }else{
        DisableSubmit();
      }
    }

    function EnableSubmit(){
      document.getElementById("submitME").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitME").disabled = true;
    }
              
  });