<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgistro Clases</title>
</head>

<body>
<center>

<?php

    include "./formularios/php/conexion.php";

    $visitante = $_POST['visitante'];


    $insertar = "INSERT INTO visitantes(visitante) VALUES ('$visitante')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM visitantes WHERE visitante = '$visitante'");

    if (mysqli_num_rows($verificar_usuario) > 0){
        echo '<script>
        
            alert ("El Correo Ya Se Encuentra Registrado");
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

</center>
</body>
</html>

