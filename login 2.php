<?php
// Simulación de conexión y consulta a la base de datos
require ('interfacesBack/conectar.php');
$email = $_POST['email'];
$password = $_POST['password'];

$consulta="Select * from usuario WHERE correo='$email' AND password= '$password'";
$resultado=$Conexion->query($consulta);
	$rows=$resultado->rowCount();

if($rows>0){
    $row = $resultado->fetch();
    $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
    if ($row['tipo_usuario']=='Admin'){
        header("location:InterfacesBack/inicio.html");
    } else {
        header("location:index.html");
    }

}else {
	echo '<script language="javascript">alert("ERROR EN EL PASSWORD O NOMBRE :(");window.location.href="login.html"</script>';
}


?>
