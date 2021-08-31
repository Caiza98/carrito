<?php
 include ("funciones.php");
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
 		echo '<scrip> alert ("ERROR"); </scrip>';
 	}
 }


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<title>Formulario</title>
</head>
<body>
		<div class="container p-5 img-fluid  text-info">
			<div class="row ">
			<div class="col text-center">
				<img src="imagenes/fondo2.jpg" width="600" class="rounded float-start" height="650">
				
			</div>

				<div class="col border border-info">
					<form method="post"  >
		<fieldset>
			<div class="form-group">
			<p class="text-success"></p>
			<legend class="text-success">Formulario Sessiones</legend>
			<label for="formGroupExampleInput" class="text-danger">Ingrese su cedula</label>
			<input type="text" class="form-control"  placeholder="Ingrese su cedula" name="usuario1"><br><br>
			<label for="inputPassword" class="col-sm-2 col-form-label">Ingrese la contraseña</label>
			<input type="password"  class="form-control" placeholder="Ingrese su contraseña" name="clave1"><br><br>
			<input type="submit" class="btn btn-outline-success" name="enviar">
			</div>
		</fieldset>

					</form>					
				</div>
			</div>
			</div>
		</div>
	
</body>
</html>