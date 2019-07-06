<?php


session_start();
require_once ('conexion.php');


$guardar_sql="";
$Cliente="";
$Email= $_SESSION['usuario'];

 

$Cliente = "SELECT * FROM clientes WHERE Cl_Email = '$Email';";
$Cliente = mysqli_query($link, $Cliente);

while ($mostrar=mysqli_fetch_array($Cliente)) {

    $Id_Cliente = $mostrar['Cl_id'];

}

$contador="SELECT MAX(Reserv_id) FROM reservas;";
$contador=mysqli_query($link,$contador);

while ($mostrar=mysqli_fetch_array($contador)) {

    $UltimoTurno = $mostrar['MAX(Reserv_id)'];
    $SiguienteTurno = $UltimoTurno + 1;
}



$Combo = "";
if  (isset($_GET['Tno_id'])) {
    $Tno_id = $_GET['Tno_id'];
    $R = $_GET['R'];
    

    $guardar_sql="INSERT INTO reservas (Reserv_id, Cl_Id, Cmbo_Id, Tno_id, Recep_Id) VALUES ('$SiguienteTurno','$Id_Cliente','$R','$Tno_id','123')";
    mysqli_query($link,$guardar_sql);

    $Inabilitar_sql=" UPDATE turnos SET Tno_Disponible = 'NO' WHERE Tno_id = $Tno_id";
    mysqli_query($link,$Inabilitar_sql);
    header ('location: cuenta.php');
  }



?>