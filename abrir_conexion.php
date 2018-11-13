<?php 
	 
	$host = "localhost";    
	$basededatos = "biblioteca";    
	$usuariodb = "root";     
	$clavedb = "pcwYCR18";    
	$tabla_db1 = "libro"; 	   
	


	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>
