<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        header('Location:../formularios/html/mensajepermiso.html');
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <link rel="stylesheet" href="../css/cambiar.css">

</head>
<body>

<!-- <center>
    
    <div class="container-form">
        <form action="../php/cambiarpass.php" method="post">

        <h3> Ingrese La Contraseña Actual </h3>
        <br>
        <input type="text" name="clave1" placeholder="Ingrese su contraseña actual" required="">

    <br><br>

        <h3> Ingrese La Contraseña Nueva </h3>
        <br>
        <input type="password" name="clave" placeholder="Ingrese su contraseña nueva" required="">

        <br><br>

        <h3> Ingrese De Nuevo La Contraseña </h3>
        <br>
        <input type="password" name="clave2" placeholder="Ingrese su contraseña nueva" required="">

        <br><br><br>
        <input type="submit" class="boton" name="boton" value="Cambiar">

        </form>
    </div> 

</center> -->

    <div class="login-box">
      <h2>Cambiar Contraseña</h2>

      <br>

      <form action="../php/cambiarpass.php" method="post">

            <div class="user-box">
              <input type="password" name="usu" required="">
              <label>Contraseña Actual</label>
            </div> 

            <div class="user-box">
              <input type="password" name="clave" required="">
              <label>Contraseña Nueva</label>
            </div>

            <div class="user-box">
              <input type="password" name="clave2" required="">
              <label>Confirmar Contraseña</label>
            </div>

            <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" class="boton" name="boton" value="Cambiar"> 
            </a>

        </form>
    </div> 

</body>
</html> 