<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
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
    <title>Panel Maestro</title>
    <link rel="stylesheet" href="../css/panel_maes.css">
    
</head>
<body>

<center>
    
    <h1 class="titulo"> Panel Del Maestro </h1>
    <h2> ¡Bienvenido! Maestro <br> <?php echo $_SESSION['usuario']; ?></h2>

    <br><br>

    <h2> <a href="../../formularios/php/cerrarsesion.php"> Cerrar Sesion </a> </h2>

</center>

</body>
</html>