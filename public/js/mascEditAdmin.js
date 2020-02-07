$(document).ready(function(){
    let nameMalME = document.getElementById("nombreMalMA");
    let razaMalME = document.getElementById("razaMalMA");
    let descripcionMalME = document.getElementById("descMalMA");
  
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
      var name = document.getElementById("nombreMA");
      var raza = document.getElementById("razaMA");
      var descripcion = document.getElementById("descripcionMA");
  
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