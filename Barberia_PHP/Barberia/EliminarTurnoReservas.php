<?php

session_start();
require_once ('conexion.php');

$EliminarTurnos="";
$EliminarReservas="";



$EliminarReservas="DELETE  FROM reservas ;";
mysqli_query($link, $EliminarReservas);


header('location:EliminarTurno.php');

?>