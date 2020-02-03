$(document).ready(function(){
    let nameMal = document.getElementById("nameMal");
    let razaMal = document.getElementById("razaMal");
    let descripcionMal = document.getElementById("descripcionMal");
  
    nameMal.hidden = true;
    razaMal.hidden = true;
    descripcionMal.hidden = true;
  
  
      $('input').keyup(function(){
      comprobar();
    });
  
    $('input').focusout(function(){
      comprobar();
    });
  
    function comprobar(){
      var bien = 0;
      var name = document.getElementById("nameR");
      var raza = document.getElementById("razaR");
      var descripcion = document.getElementById("descripcionR");
  
      if (typeof name != "string" && name.value.length < 3 || name.value.length >= 50){
          nameMal.hidden = false;
          bien--;
      }else{
        nameMal.hidden = true;
        bien++;
      }
      if (typeof raza != "string" && raza.value.length < 3 || raza.value.length >= 50){
        razaMal.hidden = false;
        bien--;
      }else{
        razaMal.hidden = true;
        bien++;
      }
      if (typeof descripcion != "string" && descripcion.value.length < 3 || descripcion.value.length >= 50){
        descripcionMal.hidden = false;
        bien--;
      }else{
        descripcionMal.hidden = true;
        bien++;
      }
      if(bien === 3){
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