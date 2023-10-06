<?php

    include "../../php/conexion.php";

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];    
    $contacto = $_POST['contacto'];
    $contraseña = $_POST['contraseña'];
    $area = $_POST['area'];

    if ($tipo == ""){
        echo "Ingrese Una Opcion Valida";
        header("Location: ../index.html");
        exit();
    }

    $insertar = "INSERT INTO estudiantes (nombre,correo,contacto,correo,contraseña,area) VALUES('$nombre','$correo','$contacto','$contraseña','$area')";
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM estudiantes WHERE nombre = '$nombre'");

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
              alert("Datos Insertados Correctamente");
              window.history.go(-1);
              </script>';
    }else{
        echo "Problema Para Insertar Los Datos";
    }

    mysqli_close($conexion);

?>