<?php
 include ("funciones.php");
 
 $conect=conexion();

 if (isset($_POST['registro'])) {
    $cedula=$_POST['cedula'];
    $name=$_POST['name'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $password=$_POST['password'];
    
    $validar= registro($cedula,$name,$direccion,$telefono,$password);
     if($validar>0){
      header('Location:index.php');
     }else{
      header('Location:registrar.php');
     }
 }
  


?>