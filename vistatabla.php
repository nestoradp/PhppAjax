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
        <div class="container" id="principal">
            <h3 class="badge-success"> Registro de Usuarios del sistema</h3>
      <table class="table table-striped  table-bordered">
  <thead>
    <tr>
      <th scope="col">identificador</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Usuarios</th>
      <th scope="col">Telefono</th>
      <th scope="col" colspan="2">Opciones</th>
     
    </tr>
  </thead>
  <tbody>
      <?php
        
          
          foreach ($respuesta as $columna){ ?>
              
      <tr>
          <td><?php echo $columna['identificador'];?> </td>
          <td> <?php echo $columna['nombre']; ?>  </td>
          <td> <?php echo $columna['apellidos'];?> </td>
          <td> <?php echo $columna['usuario']; ?>  </td>
           <td> <?php echo $columna['telefono'];?> </td>
           <td> <a style="cursor: pointer" onclick="Modificar(<?php echo $columna['identificador'];?>);" >Modificar</a> </td>
            <td> <a style="cursor: pointer" onclick="EliminarUsuario(<?php echo $columna['identificador'];?>);" >Eliminar</a> </td>
      </tr>          
 
               
              
       <?php   } ?>
  </tbody>
</table>
            
            
        </div>  
        
        
        
        
    </body>
</html>
