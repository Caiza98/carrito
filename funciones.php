<?php
function conexion(){
   $servidor="localhost";
   $usuario="root";
   $clave="";
   $base="cart";
   $conectar=mysqli_connect($servidor, $usuario, $clave, $base) or die("ERROR DE CONEXION");
   return $conectar;

}

function ingresar($usu,$clave){
	$conectar=conexion();
	$query="select * from clientes where cliCedula='$usu' and cliClave='$clave' ";
	$enviar=mysqli_query($conectar,$query);
	$ver=mysqli_num_rows($enviar);
	return $ver;

}


function registro($a, $b, $c, $d, $e){
	$conectar=conexion();
	$query="INSERT INTO clientes values (0,'$a','$b','$c','$d','$e')";
	$enviar = mysqli_query($conectar,$query);
	return $enviar;

}


?>

