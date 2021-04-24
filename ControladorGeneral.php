<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './conexion.php';
extract($_REQUEST);
switch ($action){
  case'insertar':
      InsertarUsuario() ;
      break;
    
    case'modificar':
        ModificarUsuario();
      break;
    
    case'listar':
        ListarUsuario();
      break;   
  
  case'actualizar':
      ActualizarUsuario();
      break; 
  
  case'eliminar':
      EliminarUsuario();
      break; 
  
}









function InsertarUsuario(){
   extract($_REQUEST);

$conexion = new conexion();
$sql = "INSERT INTO nombre(identificador,nombre,apellidos,usuario,telefono) Values('$AxId','$AxNombre','$AxApellidos','$AxUsuario','$AxTelefono')";
$respuesta=$conexion->consulta($sql);
if($respuesta)
    echo  "<h3>Proceso Insertado</h3>"; 
else {
    echo "<h3>Fallo</h3>";    
} 
    
    
    
}
function ModificarUsuario(){
    extract($_REQUEST);

$conexion = new conexion();
$sql= "SELECT *FROM nombre where(identificador ='$AxIdent')";
$respuesta =$conexion->consulta($sql);
$array = pg_fetch_array($respuesta);// consulta una fila de la base de datos

if($respuesta){
    include_once './vistamodificar.php';
}
 else {
    echo "<h3>Fallo</h3>";    
}  
    
}

function ListarUsuario(){
  $conexion = new conexion();

$sql= "SELECT * FROM nombre" ;
//$conexion->consulta($sql);
$respuesta=$conexion->consultaElemntos($sql);

include_once './vistatabla.php';
     
  
    
}

function ActualizarUsuario(){
    extract($_REQUEST);

$conexion = new conexion();
$sql= "UPDATE nombre set   nombre = '$AxNombre',apellidos = '$AxApellidos',usuario = '$AxUsuario',   telefono = '$AxTelefono' where(identificador='$AxId') ";
$respuesta =$conexion->consulta($sql);


if($respuesta){
  echo "<h3>Usuario Actualizado</h3>";  
}
 else {
    echo "<h3>Fallo</h3>";    
}  
    
}


function EliminarUsuario(){
    extract($_REQUEST);

$conexion = new conexion();
$sql= "DELETE FROM nombre where(identificador='$AxId')";
$respuesta =$conexion->consulta($sql);


if($respuesta){
  echo "<h3>Usuario Eliminado</h3>";  
}
 else {
    echo "<h3>Fallo</h3>";    
}  
    
}