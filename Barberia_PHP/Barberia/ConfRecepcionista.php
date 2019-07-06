<!DOCTYPE html>
<html lang="en">
<?php

include('conexion.php');
$identificacion="";
$nombre="";
$celular="";
$email="";
$direccion="";

// Guardar
	if(isset($_REQUEST['guardar'])){ 
		$identificacion=$_REQUEST['identificacion'];
		$nombre=$_REQUEST['nombre']; 
		$celular=$_REQUEST['celular'];
		$email=$_REQUEST['email'];
		$direccion=$_REQUEST['direccion'];
		
		
		
		if(!empty($_REQUEST['identificacion']) && !empty ($_REQUEST['nombre']) && !empty($_REQUEST['celular']) && !empty ($_REQUEST['email']) && !empty ($_REQUEST['direccion'])){ 
			$guardar="insert into recepcion (Recep_id,Recep_Nombre,Recep_Celular,Recep_Email,Recep_Drcc) values($identificacion,'$nombre','$celular','$email','$direccion')"; 
			mysqli_query($link,$guardar) or die("<script languaje='javascript'>alert('El dato ya existe.')</script>"); 
			echo "<script languaje='javascript'>alert('Se ha registrado satisfactoriamente.')</script>";
			$identificacion="";
			$nombre="";
			$celular="";
			$email="";
			$direccion="";
			
		}
		else{
			echo "Por favor llene sus datos";
		}

    }
    
    // Consultar
if(isset($_REQUEST['consultar'])){
	$identificacion=$_REQUEST['identificacion'];
	
		if(!empty($_REQUEST['identificacion'])) { 
		
		$consultar="SELECT * FROM recepcion WHERE Recep_id=$identificacion"; 
		$frespuesta=mysqli_query($link,$consultar);
		$frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
			
			if(empty($frow)) {
			echo "<script languaje='javascript'>alert('Esta recepcionista no existe.')</script>";
			}
			else{
			$identificacion=$frow['Recep_id'];
            $nombre=$frow['Recep_Nombre'];
            $celular=$frow['Recep_Celular'];
            $email=$frow['Recep_Email'];
			$direccion=$frow['Recep_Drcc'];
            
			}
		}
    }

    // Actualizar
	if(isset($_REQUEST['actualizar'])){
        $identificacion=$_REQUEST['identificacion'];
        $nombre=$_REQUEST['nombre'];
        $celular=$_REQUEST['celular'];
        $email=$_REQUEST['email'];
        $direccion=$_REQUEST['direccion'];
        

        if(!empty($identificacion)){
        
            if(!empty($nombre) && !empty($celular) && !empty($email)  && !empty($direccion)){
            $actualizar="UPDATE recepcion SET Recep_Nombre='$nombre', Recep_Celular='$celular', Recep_Email='$email', Recep_Drcc='$direccion' where Recep_id=$identificacion";
            $respuesta=mysqli_query($link,$actualizar);
            $identificacion="";
            $nombre="";
            $celular="";
            $email="";
            $direccion="";
          

        if($respuesta){
            echo "<script languaje='javascript'>alert('Datos Actualizados correctamente.')</script>";
        }
            }
        }
    }

    // Eliminar
	if(isset($_REQUEST['eliminar'])) {
        $identificacion=$_REQUEST['identificacion'];
        
            if(!empty($_REQUEST['identificacion'])){
            $eliminar="DELETE FROM recepcion WHERE Recep_id=$identificacion";
            mysqli_query($link,$eliminar);
            echo "<script languaje='javascript'>alert('Datos Eliminados correctamente')</script>";
            $identificacion="";
            }
        }
//Limpiar
if(isset($_REQUEST['limpiar'])){
	$identificacion="";
	$nombre="";
	$celular="";
	$email="";
	$direccion="";
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
						Configurar Recepcionista
					</span>

					

					<div class="wrap-input100 " data-validate="Ingrese una contraseña">
						<input class="input100 integer" type="text" name="identificacion" placeholder="Identificacion" value="<?php echo $identificacion; ?>">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100" data-validate = "Ingrese su Nombre"  >
						<input class="input100" type="text" name="nombre" placeholder="Nombre" value="<?php echo $nombre; ?>" onkeypress="return soloLetras(event);">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 " data-validate = "Ingrese su numero de Celular" >
							<input class="input100 integer" type="text" name="celular" placeholder="Celular" value="<?php echo $celular; ?>">
							<span class="focus-input100" data-placeholder=""></span>
						</div>

						<div class="wrap-input100 " data-validate = "Ingrese su Email" >
								<input class="input100" type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
								<span class="focus-input100" data-placeholder=""></span>
							</div>

							<div class="wrap-input100 " data-validate = "Ingrese su Direccion" >
									<input class="input100" type="text" name="direccion" placeholder="Direccion" value="<?php echo $direccion; ?>">
									<span class="focus-input100" data-placeholder=""></span>
								</div>

					


					<!--<input type="submit" name="guardar" value="Registrarse" style="color: black; font-family: Broadway">-->


					<div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="guardar">
							<a href="ConfRecepcionista.php">Guardar</a>
						</button><td>
					<button class="login100-form-btn" name="consultar">
							<a >Consultar</a>
						</button><td>

                    </div>
                    
                    <div class="container-login100-form-btn">
                    </button><td>
                        <button class="login100-form-btn" name="actualizar">
							<a >Actualizar</a>
						</button><td>
                        <button class="login100-form-btn" name="eliminar">
							<a >Eliminar</a>
						</button><td>
					</div>
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="limpiar">
							<a >Limpiar</a>
						</button><td>
					</div>
					

					<div class="text-center p-t-90">
							<a class="txt1" href="Administrador.php">
									Volver
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

	<script src="js/jquery.numeric.js"></script>


<!--Validacion de Letras -->
<script type="text/javascript">
$(document).ready(function(){
  soloLetras();

});
  function soloLetras(e){
  var key = e.keyCode || e.which;

  var tecla = String.fromCharCode(key).toLowerCase();

  var letras = "áéíóúabcdefghijklmnñopqrstuvwxyz";

  var especiales = [8,37,39,46];

  var tecla_especial = false

  for (var i in especiales){
	if(key == especiales[i]){
	  tecla_especial = false;
	  break;

	};
  }
  if (letras.indexOf(tecla) == -1 && !tecla_especial)
  return false;
}
</script>


<!--Validacion de Numeros -->

<script>
$(document).ready(function () {
validarNum();
});
function validarNum() {
$(".numeric").numeric();
$(".integer").numeric(false, function() { alert("Integers only"); this.value = ""; this.focus(); });
$(".positive").numeric({ negative: false }, function() { alert("No negative values"); this.value = ""; this.focus(); });
$(".positive-integer").numeric({ decimal: false, negative: false }, function() { alert("Positive integers only"); this.value = ""; this.focus(); });
$(".decimal-2-places").numeric({ decimalPlaces: 2 });
$("#remove").click(
function(e)
{
e.preventDefault();
$(".numeric,.integer,.positive,.positive-integer,.decimal-2-places").removeNumeric();
}
)};

</script>

</body>
</html>