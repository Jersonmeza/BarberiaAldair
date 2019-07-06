<?php

require_once ('conexion.php');

$Contador= 0 ;
$Email = $_SESSION['usuario'];

$usu = "SELECT * FROM clientes WHERE Cl_Email='$Email';";
$usu = mysqli_query($link,$usu);

echo "<center>";
while ($most=mysqli_fetch_array($usu)) {
       
     $Cl = $most['Cl_id'];

$clien = "SELECT * FROM reservas WHERE Cl_Id= $Cl;";
$clien = mysqli_query($link,$clien);

while ($mostra=mysqli_fetch_array($clien)) {

    $cli = $mostra['Tno_id'];
    
     $sql="SELECT Bb_Nombres, turnos.* FROM turnos, barberos WHERE turnos.Bb_id = barberos.Bb_id";
     $result=mysqli_query($link,$sql);


while ($mostrar=mysqli_fetch_array($result)) {
    
    $Tno_id=$mostrar['Tno_id'];
    if ($cli == $Tno_id) {
        $Contador = $Contador + 1;
        echo "<a href='' class='button alt botoenlace'><p>".$mostrar['Bb_Nombres']."<br/> Id Turno = ".$mostrar['Tno_id']." <br/>Hora-Fecha = ".$mostrar['Tno_Fecha_Hora']."<br/>Hora Venc = ".$mostrar['Tno_Hora_Venc']."</p></a><b> </b>";
      if ($Contador == 4) {
        echo "<br><br><br><br>";
        $Contador = 0;
      }
    }
      
}

}
}

echo "</center>";

?>