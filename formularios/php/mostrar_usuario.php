<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        echo "Error, No tiene Permiso Para Ingresar A La Aplicacion";
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Usuario</title>

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

h1{
    font-size: 60px;
    padding-bottom: 30px;
    color: white;
}

h1:hover{
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
    color: aqua;
    transition: 0.5s;
}

.cuadro{
    width: 450px;
    height: 250px;
    background-color: rgba(0, 0, 0, var(--opacidad-negro));
    padding: 50px;
    font-size: 20px;
    border-radius: 40px;
    font-size: 20px;
}

.opcion:hover{
    color: red;
    transform: scale(1.1,1.1);
    background-color: rgba(10, 10, 10, var(--opacidad-negro));
}

table{
    border: 1px;
    padding: 15px;
    font: 20px sans-serif;
}

thead{
    background-color: aqua;
    color: black;
}

thead:hover{
    background-color: violet;
    transition: 0.5s;
    color: white;
    transform: scale(1.1,1.1);
}

td{
    padding: 15px;
}

.colu:hover{
    transform: scale(1.1,1.1);
    transition: 0.5s;
}

.buscar{
    padding-bottom: 30px;
    color: aqua;
    font-size: 20px;
}

.buscar:hover{
    color: red;
}

</style>

</head>
<body>

<center>
    
    <h1 class="titulo"> Mostrar Usuario </h1>
    <h2> ¡Bienvenido! Administrador<br> <?php echo $_SESSION['usuario']; ?></h2>

    <br><br>

    <h2> <a href="../php/cerrarsesion.php" class="cerrar"> Cerrar Sesion </a> </h2>

    <br><br><br>
    

    <div class="container_table">

        <table border="1">

            <thead>
                <tr>
                    <td> ID_USUARIO </td>
                    <td>NOMBRE</td>
                    <td>USUARIO</td>
                    <td> PASSWORD </td>
                    <td> CORREO </td>
                    <td> TIPO </td>
                </tr>
            </thead>

            <?php

            include "../php/conexion.php";

            $consulta = "SELECT * FROM usuarios";

            $resultado = mysqli_query($conexion,$consulta);

            while ($mostrar = mysqli_fetch_array($resultado)){

            ?>

            <tr class="colu">
                <td> <?php echo $mostrar['id_usuario']; ?> </td>
                <td> <?php echo $mostrar['nombre']; ?> </td>
                <td> <?php echo $mostrar['usuario']; ?> </td>
                <td> <?php echo $mostrar['password']; ?> </td>
                <td> <?php echo $mostrar['correo'] ?> </td>
                <td> <?php echo $mostrar['tipo']; ?> </td>
            </tr>

            <?php

            }

            ?>

        </table>

    </div>

    <h2 class="buscar"> <a href="../php/buscar_usuario.php"> Buscar Usuario </a> </h2>

    <div class="cuadro">

        <h2 class="opcion"> <a href="../php/pagina_admin.php"> Inicio </a> </h2>

        <br>

        <h2 class="opcion"> <a href="../php/formularioadmin.php"> Ingresar Usuarios </a> </h2>

        <br>

        <h2 class="opcion"> <a href="../php/cambiar.php"> Cambiar Contraseña </a> </h2>

        <br>

    </div>

</center>

</body>
</html>