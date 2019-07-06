<?php
  session_start();
  require_once ('conexion.php');
    $usuario="";
	$clave="";

// Iniciar


if(isset($_SESSION['usuario'])){
	echo '<script languaje="javascript">location.href = "Administrador.php";</script>';
}

if(isset($_REQUEST['iniciar'])) {
$usuario=$_REQUEST['usuario'];
$clave=$_REQUEST['clave'];

   if(!empty($_REQUEST['usuario']) && !empty($_REQUEST['clave'])){
	
	$sesion="SELECT * FROM recepcion WHERE Recep_Email = '$usuario' AND Recep_id = '$clave'";
	$frespuesta=mysqli_query($link,$sesion);
	$frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
   
	   if(empty($frow)){
	   echo "<script languaje='javascript'>alert('Usuario o Clave Invalidos.')</script>";
	   }
	   else {
	   echo "<script languaje='javascript'>alert('Sesion Iniciada Correctamente.')</script>";
	   $_SESSION['usuario']=$_REQUEST['usuario']; 
	   $_SESSION['clave']=$_REQUEST['clave'];
	   $url='http://localhost/Barberia_PHP/Barberia/Administrador.php';
	   echo "<script>window.location='$url'</script>"; 
	   header('location:Administrador.php');
	   }
   }



   else {
   echo "<script languaje='javascript'>alert('Por favor llene sus datos.')</script>";
   }
}
    if(isset($_SESSION['usuario'])){
	     echo '<script languaje="javascript">location.href = "cuenta.php";</script>';
    }

	if(isset($_REQUEST['iniciar'])) {
	$usuario=$_REQUEST['usuario'];
	$clave=$_REQUEST['clave'];
	
		if(!empty($_REQUEST['usuario']) && !empty($_REQUEST['clave'])){
			
		 $sesion="SELECT * FROM clientes WHERE Cl_Email = '$usuario' AND Cl_id = '$clave'";
		 $frespuesta=mysqli_query($link,$sesion);
		 $frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
		
			if(empty($frow)){
			echo "<script languaje='javascript'>alert('Usuario o Clave Invalidos.')</script>";
			}
			else {
			echo "<script languaje='javascript'>alert('Sesion Iniciada Correctamente.')</script>";
			$_SESSION['usuario']=$_REQUEST['usuario']; 
		    $_SESSION['clave']=$_REQUEST['clave'];
			$url='http://localhost/Barberia_PHP/Barberia/cuenta.php';
			echo "<script>window.location='$url'</script>"; 
			header('location:cuenta.php');
			}
		}
		else {
		echo "<script languaje='javascript'>alert('Por favor llene sus datos.')</script>";
		}

	}

	if(isset($_SESSION['usuario'])){
		echo '<script languaje="javascript">location.href = "cuenta.php";</script>';
   }

   if(isset($_REQUEST['iniciar'])) {
   $usuario=$_REQUEST['usuario'];
   $clave=$_REQUEST['clave'];
   
	   if(!empty($_REQUEST['usuario']) && !empty($_REQUEST['clave'])){
		
		$sesion="SELECT * FROM barberos WHERE Bb_Email = '$usuario' AND Bb_id = '$clave'";
		$frespuesta=mysqli_query($link,$sesion);
		$frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
	   
		   if(empty($frow)){
		   echo "<script languaje='javascript'>alert('Usuario o Clave Invalidos.')</script>";
		   }
		   else {
		   echo "<script languaje='javascript'>alert('Sesion Iniciada Correctamente.')</script>";
		   $_SESSION['usuario']=$_REQUEST['usuario']; 
		   $_SESSION['clave']=$_REQUEST['clave'];
		   $url='http://localhost/Barberia_PHP/Barberia/cuenta.php';
		   echo "<script>window.location='$url'</script>"; 
		   header('location:cuentaBarbero.php');
		   }
	   }
	   else {
	   echo "<script languaje='javascript'>alert('Por favor llene sus datos.')</script>";
	   }
    }
	 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Iniciar Sesion</title>
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
						Iniciar Sesiòn
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="usuario" placeholder="Usuario" value="<?php    echo $usuario; ?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="clave" placeholder="Contraseña" value="<?php echo $clave; ?>">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Recordar
						</label>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  name="iniciar">
							<a >Ingresar</a>
							<input type="submit" name="iniciar" value="">
						</button>
					</div>

					
					<div class="text-center p-t-90">
							<a class="txt1" href="registrar.php">
							    Registrarme como Cliente
								</a><br>
								<a class="txt1" href="registrarBar.php">
								Registrarme como	Barbero
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