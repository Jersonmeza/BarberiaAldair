<!DOCTYPE HTML>

<html>
	<head>
		<title>Proyecto Barberia</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="css/cuenta/main.css" />
		<link rel="stylesheet" type="text/css" href="css/inicioSesion/util.css">
	    <link rel="stylesheet" type="text/css" href="css/inicioSesion/main.css">

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


			
					<div class="container-login100 " style="background-image: url('images/banner.jpg');">
						<?php require_once ("mostrarTurnoCliente.php"); ?><br>
				    </div>		
			 
			
	</body>
</html>