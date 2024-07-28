<?php
	require ('conectar.php');
?>
<!DOCTYPE html>
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
            <input type="text" placeholder="Buscar...">
            <img src="/mi_proyecto1/logo.png" alt="Logo">
        </div>
        
        <div class="main-content">
            
     <form  class="formulario" action="insert_tratamiento.php" method="POST" enctype="multipart/form-data">
        <label><h1>Nuevos Tratamientos</h1></label>
        <label>Nombre</label>
        <input type="text" name="nombre">
        <label>Descripcion</label>
        <input type="text" name="descripcion">
        <label>Imagen </label>
        <input type="file" name="foto">
        <input type="submit" name="" value="Registrarme">
    </form>


        </div>
</body>
</html>


