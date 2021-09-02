<?php include ("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="" src="ingresar.php"></script>
	
	<title>Formulario</title>
</head>
<body class="bg-dark">
		<div class="container p-5 img-fluid  text-info">
			<div class="row ">
			<div class="col text-center">
				<img src="imagenes/fondo2.jpg" width="600" class="rounded float-start" height="650">
				
			</div>

				<div class="col border border-info">
					<form method="post" action="ingresar.php"  >
		<fieldset>
			<div class="form-group ">
			<p class="text-success"></p>
			<div class="display-3 text-center "><legend class="text-success">Session Form</legend></div>
			<div class="form-group">
				<label for="formGroupExampleInput" class="form-control-feedback">Ingrese su cedula</label>
				<input type="text" class="form-control"  placeholder="Ingrese su cedula" name="usuario1">
			</div>
			<div>
				<label for="inputPassword" class="form-control-feedback ">Ingrese la contraseña</label>
			<input type="password"  class="form-control" placeholder="Ingrese su contraseña" name="clave1">
			
			</div>
				<div class="form-group my-4">
					<input type="submit" class="btn btn-outline-success btn-block" name="enviar">
				</div>
			</div>
			<div>
				<span>You do not have an account?<a href="registrar.php">   Here</a></span>
			</div>
		</fieldset>

					</form>					
				</div>
			</div>
			</div>
		</div>
	
</body>
</html>