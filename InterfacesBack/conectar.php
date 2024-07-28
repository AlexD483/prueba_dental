<?php
try {
	$Conexion = new PDO('mysql:host=localhost;dbname=rv_dental', 'root','');
	//echo "Conexión Exitosa";
} catch (PDOException $e) {
	print "¡Error:!".$e->getMessage()."<br>";
	die();
}
?>