<!DOCTYPE HTML>

<html>
	<head>
		<title>Barberia Aldair</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/estilo.css" />
		<link rel="stylesheet" href="css/cuenta/main.css" />
		
	</head>
	<body style="background-image: url('images/pic11.jpg');">
    
	<?php 

	   $rol = $_GET['rol'];
	   if ($rol == 1) {
		include ("componentes/headerBarbero.php");
	   }elseif ($rol == 2) {
		include ("componentes/header.php");
	   }
	
	?>


     <br><br>
	<div class="galeria">
	<div class="contenedor-imagenes">

	<div class="imagen">
		<img src="images/1.jpg" alt="">
		<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
		<img src="images/2.jpg" alt="" >
		<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/3.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/4.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/5.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/6.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/7.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/8.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/9.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/10.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/11.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	<div class="imagen">
	<img src="images/12.jpg" alt="">
	<div class="overlay">
			<h2>Precio:8.000</h2>
		</div>
	</div>
	
	</div>
	</body>
</html>