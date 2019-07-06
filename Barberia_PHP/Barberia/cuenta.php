<!DOCTYPE HTML>

<html>
	<head>
		<title>Proyecto Barberia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/cuenta/main.css" />

		<?php
           session_start();
           $usuario="";
			   $clave="";
		
		   
					 if(empty($_SESSION['usuario'])){
						echo '<script languaje="javascript">location.href = "iniciosesion.php";</script>';
					 }
        ?>
	</head>
	<body>

		
			<?php  include ("componentes/header.php");?>


			<section id="banner">
				<div class="inner">
					<center>
					<ul class="actions">
						<br>
						<li><a href=Reserva.php><h1 class="button alt"> Aparte su Turno </h1></a></li><br>
						<li><a href=TurnosReservados.php><h5 class="button alt"> Ver sus Reservas </h5></a></li>
					</ul>
					</center>
				</div>
			</section>		
			 
			
	</body>
</html>