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

// Este codigo permite validar el ingreso del login a una plataforma

include "../php/conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

echo $usuario;
echo $password;

    /* session_start();
    error_reporting(0);

    $_SESSION['usuario'] = "$usuario";
    $_SESSION['password'] = "$password";
    header('location:pagina_maestros.php'); */

    $admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password' and tipo = 'admin'");

    $maes = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password' and tipo = 'maes'");

    $estudiante = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password' and tipo = 'estu'");

/* $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and password = '$password'";
                
$resultado = mysqli_query($conexion, $consulta);

$fila = mysqli_num_rows($resultado); */

if (mysqli_num_rows($admin) > 0){
    $fila = mysqli_fetch_row($admin);
    $identificador = $fila[0];
    $name = $fila[1];
    $usuario = $fila[2];
    $password = $fila[3];
    $correo = $fila[4];
    $tipo = $fila[5];

session_start();
    $_SESSION['id_usuario'] = $identificador;
    $_SESSION['nombre']  = $name;
    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;
    $_SESSION['correo'] = $correo;
    $_SESSION['tipo'] = $tipo;

    header('location:../../paneles/html/panel_admin.php');

    } elseif (mysqli_num_rows($estudiante) > 0){
        $fila = mysqli_fetch_row($estudiante);
        $identificador = $fila[0];
        $name = $fila[1];
        $usuario = $fila[2];
        $password = $fila[3];
        $correo = $fila[4];
        $tipo = $fila[5];

        session_start();
        $_SESSION['id_usuario'] = $identificador;
        $_SESSION['nombre']  = $name;
        $_SESSION['usuario'] = $usuario;
        $_SESSION['password'] = $password;
        $_SESSION['correo'] = $correo;
        $_SESSION['tipo'] = $tipo;

    header('location:../../paneles/html/panel_estu.php');

        } elseif (mysqli_num_rows($maes) > 0 ){
            $fila = mysqli_fetch_row($maes);
            $identificador = $fila[0];
            $name = $fila[1];
            $usuario = $fila[2];
            $password = $fila[3];
            $correo = $fila[4];
            $tipo = $fila[5];

            session_start();

            $_SESSION['id_usuario'] = $identificador;
            $_SESSION['nombre']  = $name;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['password'] = $password;
            $_SESSION['correo'] = $correo;
            $_SESSION['tipo'] = $tipo;

            header('location:../../paneles/html/panel_maes.php');

        } else {

            echo '<script> alert("Error De Autenticacion"); window.location.href = "../html/formulario.html" </script>';

        /* echo "Error De Autenticacion"; */

}

/* mysqli_free_result($resultado);
mysqli_close($conexion); */

?>

</body>
</html>