
<?php
 include ("funciones.php");
 include ("header.php");
 session_start();
 $conect=conexion();

 if (isset($_POST['enviar'])) {
    $usuario=$_POST['usuario1'];
    $clave=$_POST['clave1'];
    $validar= ingresar($usuario,$clave);
    if ($validar>0) {
        $_SESSION['usuario']=$usuario;
        $query="select * from clientes where cli_cedula= '$usuario' and cli_clave = '$clave' ";
        $enviarC=mysqli_query($conect,$query);
        $ver = mysqli_fetch_array($enciarC);
        $_SESSION['id']=$ver['cli_nombre'];
        $_SESSION['nombre']=$ver['cli_nombre'];
        header('location:pagina.php');

    }else{
        echo '<script> alert ("ERROR"); </script>';
    }
 }


?>