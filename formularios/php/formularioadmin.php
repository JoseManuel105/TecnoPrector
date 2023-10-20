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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Formulario Usuario</title>
  <link rel="stylesheet" href="../css/formularioadmin.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="shortcut icon" href="../../logos/Logo_Prector-removebg-preview.png" type="image/x-icon">

</head>

<body>
	
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="../php/registraroles.php" method="post">
			<h1>Resgistrar Usuario</h1>
			<div class="social-container">
				<a href="https://es-lzza.facebook.com/" class="social1"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.google.com/intl/es/account/about/" class="social2"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://co.linkedin.com/" class="social3"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span></span>

			<input name="nombre" type="text" placeholder="Nombre" required/>
			<input name="usuario" type="text" placeholder="Usuario" required/> 
			<input name="password" type="password" placeholder="Contraseña" required/> 
			<input name="correo" type="email" placeholder="Correo" required/>
            <select name="tipo" id="" placeholder="Tipo" required>
                <option value="">Tipo</option>
                <option value="admin">Administrador</option>
                <option value="maes">Maestro</option>
                <option value="estu">Estudiante</option>
            </select>
			<br>
			<button>Registrar</button>

		</form>
	</div>
	<div class="form-container sign-in-container">  
		<form action="../php/validar2.php" method="post">
			<h1><a href="../../paneles/html/panel_admin.php" class="buscar"> Regresar? </a></h1>
			<div class="social-container">
				<a href="https://es-la.facebook.com/" class="social1"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.google.com/intl/es/account/about/" class="social2"><i class="fab fa-google-plus-g"></i></a>
				<a href="https://co.linkedin.com/" class="social3"><i class="fab fa-linkedin-in"></i></a>
			</div>

			<!--<span></span>
			<input name="usuario" type="text" placeholder="usuario" />
			<input name="password" type="password" placeholder="Contraseña" />
			<a href="#" class="olvidaste">¿Olvidaste tu Contraseña?</a>
			<button>Buscar</button>-->

		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¡Bienvenido de Nuevo!</h1>
				<p>Para mantener conectado con lo que pasa en proyectos Biomedicos, inicia sesion y ve las ultimas innovaciones</p>
				<button class="ghost" id="signIn">Volver</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¡Hola, amantes de la ciencia!</h1>
				<p>Ingrese sus datos para crear una cuenta con nosotros y conocer el trabajo de innovaciones humanas</p>
				<button class="ghost" id="signUp">Registrar Usuario</button>
			</div>
		</div>
	</div>
</div>

<!-- 
<div>
	<button class="mdark" id="bdark">Hola</button>
</div>
-->

<script src="../js/formulario.js" charset="utf-8"></script>
</body>

</html>
