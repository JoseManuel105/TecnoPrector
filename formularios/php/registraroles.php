<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro Roles</title>
</head>

<style>

    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    } 

    body {
        background-color: black;
        color:  white;
        font-size: 20px;
        font-family: 'Courier New', Courier, monospace;
        --opacidad-negro: 0.4;
        background-image: linear-gradient(rgba(0, 0, 0, var(--opacidad-negro)), rgba(0, 0, 0, var(--opacidad-negro))),  url(../image/fondo.jpg);
        background-size: cover;

    }

    .titulo{
        font-size: 60px;
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .titulo:hover{
        color: aqua;
        transform: scale(1.3,1.3);
        transition: 1s;
    } 

    h2,a{
        font-size: 40px;
        text-decoration: none;
        color: gold;
    }

    h2:hover{
        color: rgba(255, 0, 0, 0.582);
        transform: scale(1.6,1.6);
        transition: 1s;
    }

</style>

<body>
<center>

<?php

    include "../php/conexion.php";

    $nombre = $_POST['nombre'];    
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $tipo = $_POST['tipo'];

    $insertar = "INSERT INTO usuarios(nombre,usuario,password,correo,tipo) VALUES('$nombre','$usuario','$password','$correo','$tipo')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
        
            alert ("El Usuario Ya Se Encuentra Registrado");
            window.history.go(-1);
        
        </script>';

        exit();
    }

    $resultado = mysqli_query($conexion,$insertar);

    if ($resultado){
        echo '<script>
        
            alert("Se Ingreso Correctamente");
            location.href = "../php/formularioadmin.php";
        
        </script>';
    }else{
        echo "Problema Para Insertar Los Registros";
    }

    mysqli_close($conexion);

?>

<a href=" ../html/formulario.html"> Ingresar Al Login </a>

</center>
</body>
</html>