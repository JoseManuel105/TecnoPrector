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
    <title>Buscar Usuario</title>

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

.container_main{
    width: 650px;
    height: 150px;
    background-color: rgba(0, 0, 0, var(--opacidad-negro));
    padding: 50px;
    font-size: 20px;
    border-radius: 40px;
    font-size: 20px;
}

.barra{
    width: 400px;
    height: 35px;
    background-color: rgba(0, 0, 0, var(--opacidad-negro));
    color: white;
}

.boton{
    width: 75px;
    height: 35px;
    font-size: 20px;
}

.boton:hover{
    transform: scale(1.1,1.1);
    transition: ease 0.4s;
    background-color: black;
    color: white;
}

h4{
    font-size: 20px;
}

h4:hover{
    color: aqua;
    transition: ease 0.5s;
}

.numero_personas{
    font-size: 30px;
}

.numero_personas:hover{
    color: aqua;
    transition: ease 0.5s;
}

</style>

</head>
<body>

<center>

<h1 class="titulo"> Buscar Usuario </h1>
    <h2> ¡Bienvenido! Administrador<br> <?php echo $_SESSION['usuario']; ?></h2>

    <br><br>

    <h2> <a href="../php/cerrarsesion.php class="cerrar"> Cerrar Sesion </a> </h2>

<br><br><br>

<div class="container_main">

    <form action="../php/buscar_usuario.php" method="post">

    <input type="searh" name="dato" placeholder="Ingrese El Nombre A Buscar" class="barra">
    <input type="submit" name="buscador" value="Buscar" class="boton">

    </form>

</div>

<br><br><br>    

<?php

    include "../php/conexion.php";

    if (isset($_POST['buscador'])){
        $buscar = $_POST['dato'];

        if (empty($buscar)){
            echo "<h4> El campo esta vacio, Ingrese una consulta </h4>";
        } else {

            $consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%".$buscar."%'";

            $mostrar = mysqli_query($conexion,$consulta);
            $var_total = mysqli_num_rows($mostrar);

                if ($row = mysqli_num_rows($mostrar)){
                    echo "<h4>Los resultados para esta busqueda son: $buscar</h4>";
                    echo "<br>";
                    echo "<h4>El total de datos encontrados fueron: $var_total</h4>";
                    echo "<br>";
                    echo "<br>";
                    echo "<hr>";

                    ?>

                    <?php
                    do{
                    ?>
                        <div class="numero_personas">
                        <tr><td> <?php echo $row['id_usuario']; ?></td></tr>
                        <tr><td> <?php echo $row['nombre']; ?> </td></tr>
                        <tr><td> <?php echo $row['tipo']; ?></td></tr>
                        </div>

                        <br><br>    

                        <?php

                    }

                    while ($row = mysqli_fetch_array($mostrar));

                    }else{
                        echo "<h4> No se encontro datos para esta busqueda: $buscar </h4>";
                    }
                }
            }   

        ?>

            <div class="cuadro">

            <h2 class="opcion"> <a href="../php/pagina_admin.php"> Mostrar Usuarios </a> </h2>

            <br>

            <h2 class="opcion"> <a href="../php/formularioadmin.php"> Ingresar Usuarios </a> </h2>

            <br>

            <h2 class="opcion"> <a href="../php/cambiar.php"> Cambiar Contraseña </a> </h2>

            <br>

            </div>

</center>   

</body>
</html>