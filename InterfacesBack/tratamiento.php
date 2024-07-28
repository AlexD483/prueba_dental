
<html lang="es">
<head>
<?php require ('conectar.php');?>     
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réplica de la Imagen</title>
    <link rel="stylesheet" href="trata_styles.css">
</head>
<body>
    <div class="sidebar">
        <a href="/rb_dental/InterfacesBack/inicio.html">Inicio</a>
        <a href="/rb_dental/InterfacesBack/usuario.html">Usuario</a>
        <a href="#" class="active">Actualizar Tratamiento</a>
        <a href="/rb_dental/InterfacesBack/comentarios.html">Comentarios</a>
        <a href="/rb_dental/index.html">Cerrar Sesión</a>
    </div>
    <div class="content">
        <div class="topbar">
            <span>Doc. Loa Tani Reyes Vazques</span>
            <a href="/rb_dental/InterfacesBack/formulario_tratamiento.php">Nuevo Tratamiento</a>
            <input type="text" placeholder="Buscar...">
            <img src="logo.png" alt="Logo">
        </div>
        
        <div class="main-content">
            <h2>Tratamientos</h2>
            <?php 
		$consultar = "SELECT Nombre,descripcion,foto FROM tratamiento";
		$result= $Conexion->query($consultar);
		while ($fila=$result->fetch()){
		 ?>
            <div class="treatment"> 
                <h1><?php echo $fila['Nombre'];  ?></h1>
                <p><?php echo $fila['descripcion'];  ?></p>
                 <?php echo '<img src="'.$fila['foto'].'" width="150px" height="150px">' ?>
            </div>
        <?php }; ?>
        </div>

    </div>
</body>
</html>