<?php

session_start();
require_once ('conexion.php');

$sql="";
$Contador = 0;
$ingresar="";
$Barbero="";
$usuario = $_SESSION['usuario'];


$Barbero = "SELECT * FROM barberos WHERE Bb_Email = '$usuario';";
$Barbero = mysqli_query($link, $Barbero);

while ($mostrar=mysqli_fetch_array($Barbero)) {

    $Id_Barbero = $mostrar['Bb_id'];

}

$count="SELECT MAX(Tno_id) FROM turnos;";
$count=mysqli_query($link,$count);

while ($mostrar=mysqli_fetch_array($count)) {

    $UltimoTurno = $mostrar['MAX(Tno_id)'];
    $SiguienteTurno = $UltimoTurno + 1;
}

if (isset($_REQUEST['Ok'])) {
    
    $HoraInicio = $_REQUEST['HoraInicio'];
    $HoraFinal = $_REQUEST['HoraFinal'];
    $fecha= date("y-n-j");

    echo $HoraFechaFinal = "$fecha $HoraFinal:00";
    echo $HoraFechaInicio = "$fecha $HoraInicio:00";

    
    $ingresar="INSERT INTO turnos (Tno_id, Bb_id, Tno_Fecha_Hora, Tno_Hora_Venc, Tno_Disponible) VALUES ($SiguienteTurno, $Id_Barbero, '$HoraFechaInicio', '$HoraFechaFinal', 'SI');";
    mysqli_query($link, $ingresar);

    header('location:turnoBarbero.php');
}



$sql="SELECT Bb_Nombres, turnos.* FROM turnos, barberos WHERE Bb_Nombres = (SELECT Bb_Nombres FROM barberos WHERE Bb_Email = '$usuario')  AND turnos.Bb_id = barberos.Bb_id";
$result=mysqli_query($link, $sql);


echo "<center><br><br><br><br>";
while ($mostrar=mysqli_fetch_array($result)) {

      $Contador = $Contador + 1;

      echo "<a class='button alt botoenlace'><p>".$mostrar['Bb_Nombres']."<br/> Id Turno = ".$mostrar['Tno_id']."<br/>Disponibilidad = ".$mostrar['Tno_Disponible']." <br/>Hora-Fecha = ".$mostrar['Tno_Fecha_Hora']."<br/>Hora Venc = ".$mostrar['Tno_Hora_Venc']."</p></a><b> </b>";
      
      
      if ($Contador == 4) {
        echo "<br><br><br><br>";
        $Contador = 0;
      }
}



echo "</center>";


   


?>

 