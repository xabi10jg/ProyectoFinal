$(document).ready(function(){
    let nameMalMC = document.getElementById("mcnameMal");
    let razaMalMC = document.getElementById("mcrazaMal");
    let descripcionMalMC = document.getElementById("mcdescripcionMal");
  
    nameMalMC.hidden = true;
    razaMalMC.hidden = true;
    descripcionMalMC.hidden = true;
  
  
    $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nameMC");
      var fecha = document.getElementById("fechaMC");
      var raza = document.getElementById("razaMC");
      var descripcion = document.getElementById("descripcionMC");
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nameMalMC.hidden = false;
          bien--;
      }else{
        nameMalMC.hidden = true;
        bien++;
      }
      if (typeof raza != "string" && raza.value.length < 3 || raza.value.length >= 50){
        razaMalMC.hidden = false;
        bien--;
      }else{
        razaMalMC.hidden = true;
        bien++;
      }
      if (typeof descripcion != "string" && descripcion.value.length < 3 || descripcion.value.length >= 50){
        descripcionMalMC.hidden = false;
        bien--;
      }else{
        descripcionMalMC.hidden = true;
        bien++;
      }
      if(bien === 3){
        EnableSubmit();
      }else{
        DisableSubmit();
      }
    }

    function EnableSubmit(){
      document.getElementById("submitMC").disabled = false;
    }
  
    function DisableSubmit(){
      document.getElementById("submitMC").disabled = true;
    }
              
  });