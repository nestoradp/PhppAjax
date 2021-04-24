<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

           <h1 class="alert-info ">Modificar Usuario    </h1>
        <div class="container ">
            <form style="padding: 20px;">
                <input  type="hidden" id="ActIdent"  value="<?php echo $array['identificador'];   ?>" >  
                <input  type="text" id="Actnombre" value="<?php echo $array['nombre']; ?>">  
                <input  type="text"  id="Actapellidos"  value="<?php echo $array['apellidos'] ;?>">
                <input  type="text" id="Actusuario"  value="<?php echo $array['usuario']; ?>" >
                <input  type="text" id="acttelefono"  value="<?php echo $array['telefono']; ?>">
               <div> 
            
                 <button type="button" class="btn btn-outline-secondary"  >Cancelar</button>
         
                 <button style="margin: 50px;" type="button" class="btn btn-primary" id="guardar" onclick="ActualizarUsuario();">Modificar</button>
            
         </div>
            
            
            </form>
            
            
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
