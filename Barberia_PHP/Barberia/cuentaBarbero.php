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

		
			<?php  include ("componentes/headerBarbero.php");?>


			<section id="banner">
				<div class="inner">
					<center>
					<ul class="actions">
						<br><br><br>
						<li><a href='turnoBarbero.php'><h1 class="button alt">¿Cuantas horas trabajaras hoy?</h1></a></li><br>
					</ul>
					</center>
					</div>
			</section>	
				

	</body>
</html>