<?php 
require ('conectar.php');

 echo $nombre= $_POST['nombre'];
 Echo $descripcion=$_POST['descripcion'];
 Echo $usuario= "1";
 $fotos = $_FILES['foto']['name'];
	$ruta = $_FILES['foto']['tmp_name'];
	$destino="fotos/".$fotos;
	copy ($ruta,$destino);


$insertar="INSERT INTO tratamiento(idTratamiento,nombre,descripcion,idUsuario,Foto) VALUES (null,'$nombre','$descripcion','$usuario','$destino')";
$resultado=$Conexion->prepare($insertar);
    $resultado->execute();


    if ($resultado) {
	    echo '<script language="javascript">alert("Registro exitoso"); window.location.href="/rb_dental/InterfacesBack/tratamiento.php"</script>';
    } else{
	    echo "Registro fallido";
    }


//insert into usuario(nombre_usuario,nombre,apPaterno,apMaterno,correo,telefono,password) values('alex','Alejandro','Contreras','Martinez','a@gmail','123456789','123');



?>