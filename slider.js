$(function() {
		$('#slider').Thumbelina({
			$bwdBut:$('#slider .left'),
			$fwdBut:$('#slider .right')
		});
	});
///// contenido interno del slider
		function Imagen(img) {
			if (img.id=="1") {
			document.getElementById("caja").src="productos/cocaCola.png";
			document.getElementById("nombre").value="Coca Cola";
			document.getElementById("valor").value="1 dolar";
			}
			if (img.id=="2") {
			document.getElementById("caja").src="productos/fanta.png";
			document.getElementById("nombre").value="Fanta";
			document.getElementById("valor").value="2 dolar";	
			}
			if (img.id=="3") {
			document.getElementById("caja").src="productos/incaKola.png";
			document.getElementById("nombre").value="Inca Kola";
			document.getElementById("valor").value="3 dolar";	
			}
			if (img.id=="4") {
			document.getElementById("caja").src="productos/nestea.png";	
			document.getElementById("nombre").value="Nestea";
			document.getElementById("valor").value="4 dolar";
			}
			if (img.id=="5") {
			document.getElementById("caja").src="productos/pepsi.png";
			document.getElementById("nombre").value="Pepsi";
			document.getElementById("valor").value="1 dolar";	
			}
			if (img.id=="6") {
			document.getElementById("caja").src="productos/sprite.png";	
			document.getElementById("nombre").value="Sprite";
			document.getElementById("valor").value="2 dolar";
			}
		}