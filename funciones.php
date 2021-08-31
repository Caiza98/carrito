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
	$query="insert into clientes value(0, $a, $b, $c, $d, $e)";
	$enviar = mysql_query($conectar,$enviar);
	return $enviar;

}

?>

