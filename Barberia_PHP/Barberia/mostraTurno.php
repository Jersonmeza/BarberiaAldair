
<?php

session_start();
require_once ('conexion.php');


$sql="";
$Corte_sql="";
$Contador= 0 ;

$Corte_sql = "SELECT * FROM combo_cortes;";
$Corte_sql = mysqli_query($link, $Corte_sql);

$R="";


echo "<div id='ComboDiv'>";
echo "<h5>¿Que deseas hacete?</h5>";
echo "<form method='post'>";
echo "<select name='combo'>";
while ($mostrar=mysqli_fetch_array($Corte_sql)) {
  echo "<option value='".$mostrar['Cmbo_Id']."'>".$mostrar['Cmbo_Nombre']."</option>";
  
}

echo "</select>";
echo "</div>";
echo "<div id='Comb'>";
echo "<button type='submit' name='Ok'>
             Seleccionar
      </button>";
echo "</div>";
echo "</form>";


if(isset($_REQUEST['Ok'])) {
  $R = $_REQUEST['combo'];
}


          
$sql="SELECT Bb_Nombres, turnos.* FROM turnos, barberos WHERE Tno_Disponible = 'SI' AND turnos.Bb_id = barberos.Bb_id";
$result=mysqli_query($link,$sql);

echo "<center><br><br><br><br>";
while ($mostrar=mysqli_fetch_array($result)) {
    
      $Contador = $Contador + 1;
      $Tno_id=$mostrar['Tno_id'];
      echo "<a href='reservar.php?Tno_id=$Tno_id&R=$R' class='button alt botoenlace'><p>".$mostrar['Bb_Nombres']."<br/> Id Turno = ".$mostrar['Tno_id']." <br/>Hora-Fecha = ".$mostrar['Tno_Fecha_Hora']."<br/>Hora Venc = ".$mostrar['Tno_Hora_Venc']."</p></a><b> </b>";
      if ($Contador == 4) {
        echo "<br><br><br><br>";
        $Contador = 0;
      }
}



echo "</center>";


      
   


?>

 