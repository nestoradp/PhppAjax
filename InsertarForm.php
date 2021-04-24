<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
           <link rel="stylesheet" type="text/css" href="Boostrap/css/bootstrap.min.css">
      
        <title>Insertar Registro</title>
    </head>
    <body>
        <h1 class="alert-info ">Ingresar Usuario    </h1>
        <div class="container ">
            <form style="padding: 20px;">
             <input  type="number"  id="ident" placeholder="identificador" >  
             <input  type="text"  id="nombre" placeholder="Nombre" >  
            <input  type="text" id="apellido" placeholder="Apellidos" >
            <input  type="text" id="usuario" placeholder="Usuario" >
            <input  type="text" id="telefono" placeholder="Telefono" >
               <div> 
            
                   <button type="reset" class="btn btn-outline-secondary"  >Cancelar</button>
         
                 <button style="margin: 50px;" type="button" class="btn btn-outline-primary" id="guardar" onclick="InsertarUsuario();">Guardar</button>
            
         </div>
            
            
            </form>
            
            
        </div>
        
        
        
        
    </body>
</html>
