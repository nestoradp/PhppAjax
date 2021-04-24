/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function  MostrarFormInsertar(){
    var parametros={};
    
    $.ajax({
        data: parametros,
        url:"InsertarForm.php",
        Type: "POST",
        beforeSend: function() {
            $('#section').html("<h1>Procesando.... </h1>");
        },
        success: function(respuesta){
            $('#section').html(respuesta);
            
        },
        error: function (xhr,status){
            alert("Ha ocurrido en el servidor");        
        
        }
        
        
    });   
}

function ListarUsuarios(){
    var parametros={};
    $.ajax({
        data: parametros,
        url:"ControladorGeneral.php?action=listar",
        Type:"POST",
        beforeSend: function() {
          $('#section').html("<h1>Procesando.....</h1>");  
        },
        
        success: function(respuesta){
           $('#section').html(respuesta); 
        },
        error: function (xhr, status){
            alert("Ha ocurrido un error");
        }
        
        
        
    });
    
    
    
}


function InsertarUsuario(){
    var parametros={
        "AxId": $("#ident").val(),
        "AxNombre": $("#nombre").val(),
        "AxApellidos": $("#apellido").val(),
        "AxUsuario": $("#usuario").val(),
        "AxTelefono": $("#telefono").val()   
    };
    
    $.ajax({
       data: parametros,
       url:"ControladorGeneral.php?action=insertar",
       type: "POST",
       beforeSend: function() {
          $('#section').html("<h1>Procesando.....</h1>");  
        },
        
        success: function(respuesta){
           $('#section').html(respuesta); 
        },
        error: function (xhr, status){
            alert("Ha ocurrido un error");
        }
        
        
        
    });
    
    
    
}


function Modificar(identificador){
    
    var parametros={
        "AxIdent": identificador       
    };
    $.ajax({
       data: parametros,
       url:"ControladorGeneral.php?action=modificar",
       type: "POST",
       beforeSend: function() {
           
          $('#section').html("<h1>Procesando.....</h1>");  
        },
        
        success: function(respuesta){
           $('#section').html(respuesta); 
        },
        error: function (xhr, status){
            alert("Ha ocurrido un error");
        }     
    });
     
}

function ActualizarUsuario(){
    var parametros={
        "AxId": $("#ActIdent").val(),
        "AxNombre": $("#Actnombre").val(),
        "AxApellidos": $("#Actapellidos").val(),
        "AxUsuario": $("#Actusuario").val(),
        "AxTelefono": $("#acttelefono").val()   
    };
    
    $.ajax({
       data: parametros,
       url:"ControladorGeneral.php?action=actualizar",
       type: "POST",
       beforeSend: function() {
          $('#section').html("<h1>Procesando.....</h1>");  
        },
        
        success: function(respuesta){
           $('#section').html(respuesta); 
        },
        error: function (xhr, status){
            alert("Ha ocurrido un error");
        }
        
        
        
    });
    
    
    
}


function EliminarUsuario(id){
    var parametros={
        "AxId": id
       
    };
    
    $.ajax({
       data: parametros,
       url:"ControladorGeneral.php?action=eliminar",
       type: "POST",
       beforeSend: function() {
          $('#section').html("<h1>Procesando.....</h1>");  
        },
        
        success: function(respuesta){
           $('#section').html(respuesta); 
        },
        error: function (xhr, status){
            alert("Ha ocurrido un error");
        }
        
        
        
    });
    
    
    
}