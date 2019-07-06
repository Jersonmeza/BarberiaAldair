<!DOCTYPE html>
<html lang="en">
<?php

include('conexion.php');
$identificacioncor="";
$nombrecor="";
$precio="";

// Guardar
if(isset($_REQUEST['guardar'])){
    $identificacioncor=$_REQUEST['identificacioncorte']; 
    $nombrecor=$_REQUEST['nombrecorte'];
    $precio=$_REQUEST['precio'];
    
    
    if(!empty($_REQUEST['identificacioncorte']) && !empty($_REQUEST['nombrecorte']) && !empty ($_REQUEST['precio'])){
        $guardar="insert into combo_cortes (Cmbo_Id,Cmbo_Nombre,Cmbo_Precio) values($identificacioncor,'$nombrecor','$precio')"; 
        mysqli_query($link,$guardar) or die("<script languaje='javascript'>alert('El dato ya existe.')</script>"); 
        echo "<script languaje='javascript'>alert('Se ha guardado satisfactoriamente.')</script>";
        $identificacioncor="";
        $nombrecor="";
        $precio="";
    }
    else{
        echo "Por favor llene sus datos";
    }
}


// Consultar
if(isset($_REQUEST['consultar'])){
	$identificacioncor=$_REQUEST['identificacioncorte'];
	
		if(!empty($_REQUEST['identificacioncorte'])) { //Verificar si estan vacios
		
		$consultar="SELECT * FROM combo_cortes WHERE Cmbo_Id=$identificacioncor"; // Se realiza la consulta
		$frespuesta=mysqli_query($link,$consultar);
		$frow=mysqli_fetch_array($frespuesta, MYSQLI_ASSOC);
			
			if(empty($frow)) {
			echo "<script languaje='javascript'>alert('Este corte no existe.')</script>";
			}
			else{
			$identificacioncor=$frow['Cmbo_Id'];
			$nombrecor=$frow['Cmbo_Nombre'];
			$precio=$frow['Cmbo_Precio'];
			
			}
		}
	}

    // Actualizar
	if(isset($_REQUEST['actualizar'])){
        $identificacioncor=$_REQUEST['identificacioncorte'];
        $nombrecor=$_REQUEST['nombrecorte'];
        $precio=$_REQUEST['precio'];
        
        
        if(!empty($identificacioncor)){
        
            if(!empty($nombrecor) && !empty($precio)){
            $actualizar="UPDATE combo_cortes SET Cmbo_Nombre='$nombrecor', Cmbo_Precio='$precio' where Cmbo_Id=$identificacioncor";
            $respuesta=mysqli_query($link,$actualizar);
            $identificacioncor="";
            $nombrecor="";
            $precio="";
        
        if($respuesta){
            echo "<script languaje='javascript'>alert('Datos actualizados correctamente.')</script>";
        }
            }
        }
    }

    // Eliminar
	if(isset($_REQUEST['eliminar'])) {
        $identificacioncor=$_REQUEST['identificacioncorte'];
        
            if(!empty($_REQUEST['identificacioncorte'])){
            $eliminar="DELETE FROM combo_cortes WHERE Cmbo_Id=$identificacioncor";
            mysqli_query($link,$eliminar);
            echo "<script languaje='javascript'>alert('Datos Eliminados correctamente')</script>";
            $identificacioncor="";
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
	<title>Configuracion</title>
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
						Configurar Cortes
                    </span>
                    
					
					
<!--<tr><td> <font face="Elephant"> Codigo: <td> <input type="text" name="identificacioncorte" style="color:blue;" value="<?php echo $identificacioncor; ?>"> <br><br>
<tr><td> <font face="Elephant"> Nombre: <td> <input type="text" name="nombrecorte" style="color:blue;" value="<?php echo $nombrecor; ?>"> <br> <br>
<tr><td> <font face="Elephant"> Precio: <td> <input type="text" name="precio" style="color:blue;" value="<?php echo $precio; ?>"> <br> <br>

<br>-->



                    <div class="wrap-input100 " data-validate="Ingrese una identificacion">
						<input class="input100 integer" type="text" name="identificacioncorte" placeholder="Identificacion"  value="<?php echo $identificacioncor; ?>">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 " data-validate = "Ingrese su Nombre" >
						<input class="input100" type="text" name="nombrecorte" placeholder="Nombre"  value="<?php echo $nombrecor; ?>" onkeypress="return soloLetras(event);">
						<span class="focus-input100" data-placeholder=""></span>
					</div>

					<div class="wrap-input100 " data-validate = "Ingrese El precio" >
							<input class="input100 integer" type="text" name="precio" placeholder="Precio" value="<?php echo $precio; ?>">
							<span class="focus-input100" data-placeholder=""></span>
						</div>

						

					


					<!--<input type="submit" name="consultar" value="Consultar" style="color: black; font-family: Broadway">-->


					<div class="container-login100-form-btn">
                    <button class="login100-form-btn" name="guardar">
							<a >Guardar</a>
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
							<a>Eliminar</a>
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

      var letras = "áéíóúabcdefghijklmnñopqrstuvwxyz+ ";

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