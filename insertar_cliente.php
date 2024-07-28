<?php 
require ('interfacesBack/conectar.php');

echo $nombre = $_POST['nombre'];
echo $email = $_POST['email'];
echo $password = $_POST['password'];

$insertar="INSERT INTO usuario(idUsuario,nombre,correo,password,tipo_usuario) VALUES (null,'$nombre','$email','$password','Usuario')";
$resultado=$Conexion->prepare($insertar);
$resultado->execute();

    if ($resultado) {
	    echo '<script language="javascript">alert("Registro exitoso"); window.location.href="/rb_dental/login.html"</script>';
    } else{
	    echo "Registro fallido";
    }


?>