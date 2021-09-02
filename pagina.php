<!DOCTYPE html>
<?php include ("header.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/thumbelina.js"></script>
	<link rel="stylesheet" type="text/css" href="js/thumbelina.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="slider.js"></script>
	<title>Homepage</title>
	
</head>
<body>
<div id="contenedor1">
	<div id="slider">
		<div class="thumbelina-but horiz left  ">&#706</div>
		<ul>
		<li><img id="1" src="productos/cocaCola.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="2" src="productos/fanta.png"  onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="3" src="productos/incaKola.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="4" src="productos/nestea.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="5" src="productos/pepsi.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		<li><img id="6" src="productos/sprite.png" onclick="Imagen(this)" style="width: 110px; height: 110px;" > </li>
		</ul>
		<div class="thumbelina-but horiz right">&#707</div>
	</div>
	
</div>


<div id="contenedor2">
<img src="" id="caja" style="width: 200px; height: 300px;">
<table border="1">
	<tr>
		<td><input type="text" id="nombre"></td>
		<td><input type="text" id="valor" ></td>
		<td><input type="text" id="file" ></td>
	</tr>
</table>
</div>
</body>
</html>