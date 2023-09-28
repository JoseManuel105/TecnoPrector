<?php

session_start();

$usuario = $_SESSION['usuario'];
$password = $_SESSION['password'];

include "../php/conexion.php";

$usu = $_POST["clave1"];
$clave = $_POST["clave"];
$clave2 = $_POST["clave2"]; 

$clave_capturada = "SELECT * FROM usuarios WHERE password = '$password'";

$respuesta = mysqli_query($conexion, $clave_capturada);

$fila = mysqli_fetch_row($respuesta);
$traer_clave = $fila[3];

if ($clave != $clave2) {
    echo '<script>

    alert("Las contraseñas no coinciden");
    window.history.go(-1);

    </script>';
} elseif ($usu == $clave_capturada) {
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