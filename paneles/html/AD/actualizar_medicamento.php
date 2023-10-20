<?php 

include "../../../formularios/php/conexion.php";

    $codigo = $_POST['codigo'];

    $consulta = ("UPDATE usuarios SET id_usuario = '$_POST[id_usuario]', nombre='$_POST[nombre]', tipo='$_POST[tipo]', usuario='$_POST[usuario]', password='$_POST[password]', correo='$_POST[correo]' WHERE id_usuario = '$codigo' ");

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<script>
        
            alert('El usuario se actualizó correctamente');

            location.href='Eliminar_user.php';

        </script>";
    }

    mysqli_close($conexion);
?>