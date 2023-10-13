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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clases</title>
  <link rel="stylesheet" href="../../principal/cabeza/cabeza.css">
  <link rel="stylesheet" href="../../style.css">
  <link rel="shortcut icon" href="../../logos/Logo_Prector-removebg-preview.png" type="image/x-icon">
</head>
<body style="padding-top: 0px; background-color: black">  
 
  <nav class="navbar" style="width: 1300px; height: 60px; padding: 10px;">
    <div class="logo">
        <a href="../../../index_pagina.html" style="font-size: 30px; padding-right: 20px;">Tecno<span class="opa">Prector</span></a>
    </div>

    <ul class="nav-items">
        <li><a style="font-size: 18px; padding-right: 10px;" href="../../index_pagina.html">Inicio</a></li>
        <li><a style="font-size: 18px; padding-right: 10px;" href="../../servicios/principal/index_servicios.html">Servicios</a></li>
        <li><a style="font-size: 18px; padding-right: 10px;" href="../../Proyectos.html">Proyectos</a></li>
        <li><a style="font-size: 18px; padding-right: 10px;" href="../../clases/index_clases.html">Clases</a></li>
        
    </ul>

    <div class="search-box" style="width: 300px; height: 35px;">
        <div class="search-icon">
            <span class="icon-search"></span>
        </div>
        <input type="text" placeholder="Buscar...">
    </div>

    <div class="icon-links" style="padding-left: 30px;">
        <div  style="padding-right: 10px;" id="search-btn"><span class="icon-search" style="width: 20px; height: 20px;"></span></div>
        <a href="../../Proyectos2.html"><div  style="padding-right: 10px;" id="customer-center"><span class="icon-phone-alt"></span></div></a>
        <a href="../../seccion-perfil-usuario.html"><div  style="padding-right: 10px;" id="login-or-signup"><span class="icon-user"></div></a>
        <div  style="padding-right: 10px;" id="toggle-bar"><span class="toggler"></span></div>
    </div>
  </nav>

  <script src="../../js/script.js"></script>
  <script src="../../js/library.js"></script>
  
</body>
</html>

<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>

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

    <div class="video-bg">
     <video autoplay loop muted class="mivideo">
      <source src="../../videos/7btrrd.mp4" type="video/mp4">
    Tu navegador no es compatible con esta pagina.    </video>
    </div>

    <div class="login-box">
      <h2>Cambiar Contraseña</h2>

      <br>

      <form action="../php/cambiarpass.php" method="post">

            <div class="user-box">
              <input type="text" name="clave1" required="">
              <label>Ingresar La Contraseña Actual</label>
            </div> 

            <div class="user-box">
              <input type="text" name="clave" required="">
              <label>Ingresar La Contraseña Nueva</label>
            </div>

            <div class="user-box">
              <input type="text" name="clave2" required="">
              <label>Confirmar Contraseña</label>
            </div>

              <a href="#">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <input type="submit" class="boton" name="boton" value="Cambiar">
              <!-- Enviar -->
              </a>

        </form>
    </div> 

</body>
</html> 