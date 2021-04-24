/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function ValidacionFormularioMateriales(){
 var edad = document.getElementById('edad');
   var cimagen = document.getElementById('cimagenes');
   var npublicaciones = document.getElementById('numeropublicaciones');
   var actasvolumen = document.getElementById(' actasvolumen');
   var cantpaginas = document.getElementById('articulocantprestamos');
 if(edad<0 &&edad>18){
        alert("Edad no valida");
          return false;
      }
      

 else if(cimagen<0){
       alert("Cantidad de Imagenes no validas");
          return false;
     
     
 } 
   
  else if(npublicaciones<0){
       alert("Cantidad de publicaciones no validas");
          return false;
     
     
 }
   else if(actasvolumen<0){
       alert("el volumen de las actas no validas");
          return false;
     
     
 }
    else if(actasvolumen<0){
       alert("Cantidad de Paginas incorrectas");
          return false;
     
    } else
         return true;

    
}
