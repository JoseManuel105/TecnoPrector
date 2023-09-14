<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Este codigo permite validar el ingreseo del login a una plataforma

include "../php/conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

    session_start();
    error_reporting(0);

    $_SESSION['usuario'] = "$usuario";
    $_SESSION['password'] = "$password";
    header('location:../php/pagina_estudiantes.php');


$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password'";

$resultado = mysqli_query($conexion, $consulta);

$fila = mysqli_num_rows($resultado);

if ($fila > 0){
    header('location:../php/pagina_estudiantes.php');
}else{
    echo "Problemas para iniciar sesion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>

</body>
</html>