<?php
// Datos de la conexión
$servername = "localhost";
$username = "root"; // Cambia esto si es necesario
$password = ""; // Cambia esto si es necesario
$dbname = "Rv_Dental";

//Conexion como la se 
try {
	$Conexion = new PDO('mysql:host=localhost;dbname=Rv_Dental', 'root','');
	// echo "Conexión Exitosa";
} catch (PDOException $e) {
	print "¡Error:!".$e->getMessage()."<br>";
	die();
}

    // Obtener datos del formulario
    $nombre="lilia";
    $correo="a@gmail.com";
    $telefono="236145";
    $password="oscar";
    // $nombre= $_POST['nombre'];
    // $correo= $_POST['correo'];
    // $telefono= $_POST['telefono'];
    // $password= $_POST['password'];



    //Preparar y enlazar
    $insertar="INSERT INTO cliente(nombre, correo,telefono, password) VALUES ($nombre, $correo,$telefono,$password)";
    $resultado=$Conexion->prepare($insertar);
    $resultado->execute();

    // Cerrar la declaración y la conexión
    if ($resultado) {
	    echo "Registro insertado";
    } else{
	    echo "Registro fallido";
    }





?>