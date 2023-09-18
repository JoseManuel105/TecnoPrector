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
session_start();

$usuario = $_SESSION['usuario'];

include "../php/conexion.php";

$usu = $_POST["usu"];
$clave = $_POST["clave"];
$clave2 = $_POST["clave2"]; 

$clave_capturada = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$usu'";

$respuesta = mysqli_query($conexion, $clave_capturada);

$fila = mysqli_fetch_row($respuesta);
$traer_clave = $fila[3];

if ($clave != $clave2) {
    echo '<script>
    alert("Las contraseñas no coinciden");
    window.history.go(-1);
    </script>';
} elseif ($usu == $traer_clave) {
    $nueva_clave = mysqli_query($conexion, "UPDATE usuarios SET password = '$clave2' WHERE password = '$usu' and usuario = '$usuario'"); // -----------------------------

    echo '<script>
    alert("Contraseña Cambiada Con Exito");
    window.location="../html/formulario.html";
    </script>';
} else {
    echo '<script>
    alert("La Contraseña Actual No Coincide");
    window.history.go(-1);
    </script>';
}
?>

    
</body>
</html>