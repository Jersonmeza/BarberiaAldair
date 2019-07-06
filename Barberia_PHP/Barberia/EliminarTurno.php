<?php

session_start();
require_once ('conexion.php');

$EliminarTurnos="";
$EliminarReservas="";


$EliminarTurnos="DELETE  FROM turnos ;";
mysqli_query($link, $EliminarTurnos);

header('location:Administrador.php');

?>