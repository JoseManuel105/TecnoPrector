<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        // echo "Error, No tiene Permiso Para Ingresar A La Aplicacion";
        header('Location:../../formularios/html/mensajepermiso.html');
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" href="../css/panel_admin.css">

</head>
<body>

<center>
    
    <h1 class="titulo"> Panel Del Administrador </h1>
    <h2> ¡Bienvenido! Administrador<br> <?php echo $_SESSION['usuario']; ?></h2>

    <br><br>

    <h2> <a href="../../formularios/php/cerrarsesion.php" class="cerrar"> Cerrar Sesion </a> </h2>

    <br><br><br>

    <div class="cuadro">
        
    <h2 class="opcion"> <a href="../../formularios/php/formularioadmin.php"> Ingresar Usuarios </a> </h2>

    <br>

    <h2 class="opcion"> <a href="../../formularios/php/mostrar_usuario.php"> Buscar Usuarios </a> </h2>

    <br>

    <h2 class="opcion"> <a href="../../formularios/php/cambiar.php"> Cambiar Contraseña </a> </h2>
    </div>

</center>

</body>
</html>