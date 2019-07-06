<!DOCTYPE html>
<html lang="en">
<?php

include('conexion.php');
$nombre="";
$celular="";
$email="";
$direccion="";
$contraseña="";
// Para guardar datos en una BD
	if(isset($_REQUEST['guardar'])){ // Verifica si se pulsa el boton Guardar
		$nombre=$_REQUEST['nombre']; // Se le asigna a una variable lo que trae el text box
		$celular=$_REQUEST['celular'];
		$email=$_REQUEST['email'];
		$direccion=$_REQUEST['direccion'];
		$contraseña=$_REQUEST['contraseña'];
		
		
		if(!empty($_REQUEST['nombre']) && !empty($_REQUEST['celular']) && !empty ($_REQUEST['email']) && !empty ($_REQUEST['direccion']) && !empty($_REQUEST['contraseña'])){ // Verificar si los campos no estan vacios
			$guardar="insert into barberos (Bb_id,Bb_Nombres,Bb_Celular,Bb_Email,Bb_Drcc,Bb_HorarioInic,Bb_HorarioFinal) values($contraseña,'$nombre','$celular','$email','$direccion','2018-11-22 09:45:00','2018-11-22 10:45:00')"; // Se realiza la inserccion de datos
			mysqli_query($link,$guardar) or die("<script languaje='javascript'>alert('El dato ya existe.')</script>"); // Se ejecuta la inserccion
			echo "<script languaje='javascript'>alert('Se ha Registrado satisfactoriamente.')</script>";
			$nombre="";
			$celular="";
			$email="";
			$direccion="";
			$contraseña="";
		}
		else{
			echo "Por favor llene sus datos";
		}
	}

	

?>
<head>
	<title>Crear Cuenta</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/inicioSesion/util.css">
	<link rel="stylesheet" type="text/css" href="css/inicioSesion/main.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/banner.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<img src="images/icon.png" width="120">
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						CREAR CUENTA
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su Nombre">
						<input class="input100" type="text" name="nombre" placeholder="Nombre">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Ingrese su numero de Celular">
							<input class="input100" type="text" name="celular" placeholder="Celular">
							<span class="focus-input100" data-placeholder=""></span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Ingrese su Email">
								<input class="input100" type="text" name="email" placeholder="Email">
								<span class="focus-input100" data-placeholder=""></span>
							</div>

							<div class="wrap-input100 validate-input" data-validate = "Ingrese su Direccion">
									<input class="input100" type="text" name="direccion" placeholder="Direccion">
									<span class="focus-input100" data-placeholder=""></span>
								</div>

					<div class="wrap-input100 validate-input" data-validate="Ingrese una contraseña">
						<input class="input100" type="password" name="contraseña" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder=""></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="guardar">
							Crear cuenta
						</button><td>

					</div>
					

					<div class="text-center p-t-90">
							<a class="txt1" href="iniciosesion.php">
									Ya tengo una cuenta
								</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/inicioSesion/main.js"></script>

</body>
</html>