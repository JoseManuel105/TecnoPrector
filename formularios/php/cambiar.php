<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        echo "Error, No tiene Permiso Para Ingresar, Metiche";
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

    <style>

*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
} 

body {
    background-color: black;
    color:  white;
    font-size: 10px;
    font-family: 'Courier New', Courier, monospace;
    --opacidad-negro: 0.4;
    background-image: linear-gradient(rgba(0, 0, 0, var(--opacidad-negro)), rgba(0, 0, 0, var(--opacidad-negro))),  url(images/fondo.png);
    background-size: cover;

}

.titulo{
    font-size: 60px;
    padding-top: 20px;
    padding-bottom: 30px;
    color: white;
}

.titulo:hover{
    color: aqua;
    transition: 0.5s;    
} 

.cerrar:hover{
    color: white;
    background-color: rgba(0, 0, 0, var(--opacidad-negro));
    transition: ease 1s;
    padding: 6px;
}

h2,a{
    font-size: 30px;
    text-decoration: none;
    color: gold;
}

h3{
    font-size: 25px;
}

h2:hover,h3:hover{
    color: rgba(255, 0, 0, 0.582);
    transition: 0.5s;
}

.container-form{
    width: 600px;
    height: 450px;
    background-color: rgba(0, 0, 0, var(--opacidad-negro));
    padding: 50px;
    font-size: 20px;
    border-radius: 40px;
    font-size: 20px;
}

input{
    width: 300px;
    height: 30px;
}

input:hover{
    transform: scale(1.1,1.1);
    transition: ease 0.5s;
    background-color: black;
    color: white;
}

.boton{
    width: 100px;
    height: 30px;
}

</style>

</head>
<body>

<center>
    
    <a href="../php/pagina_admin.php"><h1 class="titulo"> Cambiar Contraseña</h1></a>
    <h2> ¡Bienvenido! Administrador<br> <?php //echo $_SESSION['usuario']; ?></h2>

    <br><br>

    <h2> <a href="../php/cerrarsesion.php" class="cerrar"> Cerrar Sesion </a> </h2>

    <br>

    <h2 class="opcion"> <a href="../php/pagina_admin.php"> Inicio </a> </h2>


    <br>

    <!-- <h2> <a href="formularioadmin.php"> Ingresar Usuarios </a> </h2>

    <br>

    <h2> <a href="formularioadmin.php"> Buscar Usuarios </a> </h2>

    <br>

    <h2> <a href="cambiar.php"> Cambiar Contraseña </a> </h2> -->

    <br>

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



</center>

</body>
</html>