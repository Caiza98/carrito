<?php include ("header.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script
  	src="https://code.jquery.com/jquery-3.6.0.min.js"
 	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  	crossorigin="anonymous"></script>
	<script src="app.js"></script>
	<title>Register your date</title>
</head> 
<body class="bg-dark">
	<div class="container p-5 img-fluid  text-light " >
		<div class="row ">
			<div class="col text-center" >
				<img src="imagenes/fondo2.jpg" width="600" class="rounded float-start" height="800">
				
			</div>
			<div class="col border border-info  ">
				<div class="text-end">
					
				</div>
				<div>
					<h2 class="fw-bold text-center my-2">Register with your data </h2>


					<form id="form" action="insertar.php" method="post">
						<div class="form-group ">
							<label for="cedula" class="form-label">Identification card</label>
							<input type="text" class="form-control" name="cedula" id="cedula" >
						</div>
						<div class="form-group">
							<label for="name" class="form-label">User name</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
						<div class="form-group">
							<label for="direccion" class="form-label">Direction</label>
							<input type="text" class="form-control" name="direccion" id="direccion">
						</div>
						<div class="form-group">
							<label for="telefono" class="form-label">Telephone number</label>
							<input type="text" class="form-control" name="telefono" id="telefono">
						</div>
						<div class="form-group">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						
						<div class="d-grid">
							<input type="submit" class="btn btn-outline-success btn-block" name="registro">
						</div>
						
					</form id="form">
					<div class="container w-100 my-5">
						<div class="row text-center">
							<div class="col-12">Log in</div>
						</div>
						<div class="row">
							<div class="col">
								<button class="btn btn-outline-primary w-100 my-1">
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/faceboock.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Faceboock
									</div>
								</div>
								</button>
							</div>
							<div class="col">
								
								<button class="btn btn-outline-danger w-100 my-1" >
								<div class="row align-items-center">
									<div class="col-2">
										<img src="imagenes/gmail.png" width="32" alt="">
									</div>
									<div class="col-10 text-center">
										Google
									</div>
								</div>
								</button>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>

	</div>



</body>
</html>