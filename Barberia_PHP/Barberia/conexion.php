<?php
global $host,$user,$pass,$database; 

	$host="localhost";
	$user="root";		
	$pass="";			
	$database="baberia(sturin)";
	
	@$link=mysqli_connect($host,$user,$pass) or die ("Conexion Fallida");
	mysqli_select_db($link,$database) or die ("Error al conectarse con la base de datos");
		

?>