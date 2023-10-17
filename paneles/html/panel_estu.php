<!-- <?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion = ''){
        // echo "Error, No tiene Permiso Para Ingresar A La Aplicacion";
        header('Location:../../formularios/html/mensajepermiso.html');
        die();
        }
        ?>

    <h2> <a href="../../formularios/php/cerrarsesion.php" class="cerrar"> Cerrar Sesion </a> </h2>

    <br><br><br>

    <div class="cuadro">
        
    <h2 class="opcion"> <a href="../../formularios/php/formularioadmin.php"> Ingresar Usuarios </a> </h2>

    <br>

    <h2 class="opcion"> <a href="../../formularios/php/mostrar_usuario.php"> Buscar Usuarios </a> </h2>

    <br>
 -->
 

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Panel Estudiante</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/panel_admin.css">
  <link rel="shortcut icon" href="../../logos/Logo_Prector-removebg-preview.png" type="image/x-icon">

  </head>
<body>
    <!-- partial:index.partial.html -->
    <div class="video-bg">
     <video width="320" height="240" autoplay loop muted>
      <source src="https://assets.codepen.io/3364143/7btrrd.mp4" type="video/mp4">
    Tu navegador no es compatible con esta pagina.    </video>
    </div>

    <div class="dark-light">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
         <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" /></svg>
    </div>

    <div class="app">

     <div class="header">

      <div class="panel">Panel Del Estudiante</div> <br>  
      
      <div class="header-menu">
       <a class="menu-link is-active" href="#">Inicio</a>
       <a class="menu-link notify" href="AG/clases.php">Clases</a>
       
      </div>

      <div class="search-bar">
       <input type="text" placeholder="Search">
      </div>

      <div class="header-profile">
       <div class="notification">
        <span class="notification-number">3</span>
        <svg viewBox="0 0 24 24" fill="currentColor" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
         <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9M13.73 21a2 2 0 01-3.46 0" />
        </svg>
       </div>
       <svg viewBox="0 0 512 512" fill="currentColor">
        <path d="M448.773 235.551A135.893 135.893 0 00451 211c0-74.443-60.557-135-135-135-47.52 0-91.567 25.313-115.766 65.537-32.666-10.59-66.182-6.049-93.794 12.979-27.612 19.013-44.092 49.116-45.425 82.031C24.716 253.788 0 290.497 0 331c0 7.031 1.703 13.887 3.006 20.537l.015.015C12.719 400.492 56.034 436 106 436h300c57.891 0 106-47.109 106-105 0-40.942-25.053-77.798-63.227-95.449z" />
       </svg>
       <img class="profile-img" src="https://images.unsplash.com/photo-1600353068440-6361ef3a86e8?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="">
      </div>

     </div>
     <div class="wrapper">
      <div class="left-side">
       <div class="side-wrapper">
        <div class="side-title">Apps</div>
        <div class="side-menu">

         <a href="../../index_pagina.html">
          <svg viewBox="0 0 512 512">
           <g xmlns="http://www.w3.org/2000/svg" fill="currentColor">
            <path d="M0 0h128v128H0zm0 0M192 0h128v128H192zm0 0M384 0h128v128H384zm0 0M0 192h128v128H0zm0 0" data-original="#bfc9d1" />
           </g>
           <path xmlns="http://www.w3.org/2000/svg" d="M192 192h128v128H192zm0 0" fill="currentColor" data-original="#82b1ff" />
           <path xmlns="http://www.w3.org/2000/svg" d="M384 192h128v128H384zm0 0M0 384h128v128H0zm0 0M192 384h128v128H192zm0 0M384 384h128v128H384zm0 0" fill="currentColor" data-original="#bfc9d1" />
          </svg>
          Pagina Principal
         </a>

         <a href="../../formularios/html/formulario.html">
          <svg viewBox="0 0 488.932 488.932" fill="currentColor">
           <path d="M243.158 61.361v-57.6c0-3.2 4-4.9 6.7-2.9l118.4 87c2 1.5 2 4.4 0 5.9l-118.4 87c-2.7 2-6.7.2-6.7-2.9v-57.5c-87.8 1.4-158.1 76-152.1 165.4 5.1 76.8 67.7 139.1 144.5 144 81.4 5.2 150.6-53 163-129.9 2.3-14.3 14.7-24.7 29.2-24.7 17.9 0 31.8 15.9 29 33.5-17.4 109.7-118.5 192-235.7 178.9-98-11-176.7-89.4-187.8-187.4-14.7-128.2 84.9-237.4 209.9-238.8z" />
          </svg>
          Formulario
          <span class="notification-number updates">0</span>
         </a>
        </div>
       </div>

       <div class="side-wrapper">
        <div class="side-title"><a href="../../servicios/principal/index_servicios.html"class="side-title">Servicios</a></div>
        <div class="side-menu">
     
     <a href="../../servicios/orientacion_vocacional">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Orientacion
     </a>
     <a href="../../servicios/bilbioteca_prector/index_biblioteca.html">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Biblioteca
     </a>
     <a href="../../servicios/prector_games/principal/index_games.html">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Prector Games
     </a>
     <a href="../../servicios/streaming_prector/index.html">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Prector Streming
     </a>
     <a href="../../servicios/principal/index_servicios.html">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Simuladores Phet
     </a> 
     <a href="../../servicios/tecnicas_estudio/index.html">
      <svg viewBox="0 0 332 332" fill="currentColor">
       <path d="M282.341 8.283C275.765 2.705 266.211 0 253.103 0c-18.951 0-36.359 5.634-51.756 16.743-14.972 10.794-29.274 28.637-42.482 53.028-4.358 7.993-7.428 11.041-8.973 12.179h-26.255c-10.84 0-19.626 8.786-19.626 19.626 0 8.989 6.077 16.486 14.323 18.809l-.05.165h.589c1.531.385 3.109.651 4.757.651h18.833l-32.688 128.001c-7.208 27.848-10.323 37.782-11.666 41.24-1.445 3.711-3.266 7.062-5.542 10.135-.42-5.39-2.637-10.143-6.508-13.854-4.264-4.079-10.109-6.136-17.364-6.136-8.227 0-15.08 2.433-20.37 7.229-5.416 4.93-8.283 11.193-8.283 18.134 0 5.157 1.701 12.712 9.828 19.348 6.139 4.97 14.845 7.382 26.621 7.382 17.096 0 32.541-4.568 45.891-13.577 13.112-8.845 24.612-22.489 34.166-40.522 9.391-17.678 18.696-45.124 28.427-83.9l18.598-73.479h30.016c10.841 0 19.625-8.785 19.625-19.625s-8.784-19.626-19.625-19.626h-19.628c6.34-21.62 14.175-37.948 23.443-48.578 2.284-2.695 5.246-5.692 8.412-7.678-1.543 3.392-2.325 6.767-2.325 10.055 0 6.164 2.409 11.714 6.909 16.03 4.484 4.336 10.167 6.54 16.888 6.54 7.085 0 13.373-2.667 18.17-7.716 4.76-5.005 7.185-11.633 7.185-19.703.017-9.079-3.554-16.899-10.302-22.618z" />
      </svg>
      Tecnicas estudio
     </a>
    </div>
   </div>
       
   <div class="side-wrapper">
        <div class="side-title">Configuraciones</div>
        <div class="side-menu">
        <a href="../../seccion-perfil-usuario.html">

          <svg viewBox="0 0 512 512" fill="currentColor">
           <path d="M467 0H45C20.186 0 0 20.186 0 45v422c0 24.814 20.186 45 45 45h422c24.814 0 45-20.186 45-45V45c0-24.814-20.186-45-45-45zM181 241c41.353 0 75 33.647 75 75s-33.647 75-75 75-75-33.647-75-75c0-8.291 6.709-15 15-15s15 6.709 15 15c0 24.814 20.186 45 45 45s45-20.186 45-45-20.186-45-45-45c-41.353 0-75-33.647-75-75s33.647-75 75-75 75 33.647 75 75c0 8.291-6.709 15-15 15s-15-6.709-15-15c0-24.814-20.186-45-45-45s-45 20.186-45 45 20.186 45 45 45zm180 120h30c8.291 0 15 6.709 15 15s-6.709 15-15 15h-30c-24.814 0-45-20.186-45-45V211h-15c-8.291 0-15-6.709-15-15s6.709-15 15-15h15v-45c0-8.291 6.709-15 15-15s15 6.709 15 15v45h45c8.291 0 15 6.709 15 15s-6.709 15-15 15h-45v135c0 8.276 6.724 15 15 15z" />
          </svg>
          Cuenta
         </a>

         <a href="../../formularios/php/cambiar.php">
          <svg viewBox="0 0 511.441 511.441" fill="currentColor">
           <path d="M255.721 347.484L90.22 266.751v106.57l165.51 73.503 165.509-73.503V266.742z" />
           <path d="M511.441 189.361L255.721 64.617 0 189.361l255.721 124.744 195.522-95.378v111.032h30V204.092z" />
          </svg>
          Contraseña
         </a>

         <a href="../../formularios/php/cerrarsesion.php">
          <svg viewBox="0 0 512 512" fill="currentColor">
           <path d="M196 151h-75v90h75c24.814 0 45-20.186 45-45s-20.186-45-45-45z" />
           <path d="M467 0H45C20.186 0 0 20.186 0 45v422c0 24.814 20.186 45 45 45h422c24.814 0 45-20.186 45-45V45c0-24.814-20.186-45-45-45zM196 271h-75v105c0 8.291-6.709 15-15 15s-15-6.709-15-15V136c0-8.291 6.709-15 15-15h90c41.353 0 75 33.647 75 75s-33.647 75-75 75zm210-60c8.291 0 15 6.709 15 15s-6.709 15-15 15h-45v135c0 8.291-6.709 15-15 15s-15-6.709-15-15V241h-15c-8.291 0-15-6.709-15-15s6.709-15 15-15h15v-45c0-24.814 20.186-45 45-45h30c8.291 0 15 6.709 15 15s-6.709 15-15 15h-30c-8.276 0-15 6.724-15 15v45h45z" />
          </svg>
          Cerrar Sesion
         </a>
         
        </div>
       </div>
      </div>

      <div class="main-container"> <!------------------------------------------------------->
       <div class="main-header">
        <!-- <a class="menu-link-main" href="#">All Apps</a>
        <div class="header-menu">
         <a class="main-header-link is-active" href="#">Desktop</a>
         <a class="main-header-link" href="#">Mobile</a>
         <a class="main-header-link" href="#">Web</a>
        </div> -->

        <p class="bienvenido"> Bienvenido Estudiante <h6 class="nombre_usuario"><?php echo $_SESSION['usuario']; ?> </h6></p>

       </div>  
       <div class="content-wrapper">
        <div class="content-wrapper-header">
         <div class="content-wrapper-context">
          <h3 class="img-content">
           
            Panel Del Estudiante 
          </h3>
          <div class="content-text">Bienvenido al panel del Estudiante de TecnoPrector, en este panel podras acceder a multiples herramientas fundamentales acerca de la plataforma web, y ver toda la informacion que en esta se plantea.</div>
          <!-- <button class="content-button">Start free trial</button> -->
         </div>
         <img class="content-wrapper-img" src="https://assets.codepen.io/3364143/glass.png" alt="">
        </div>
        <div class="content-section">
         <div class="content-section-title">Herramientas</div>
         <ul>
          <li class="adobe-product">
           <div class="products">
            Contactar con Maestros
           </div>
           <span class="status">
            <span class="status-circle green"></span>
            ACTIVO</span>
           <div class="button-wrapper">
            <button class="content-button status-button"><a href="./AT/cont_maes.php" class="non">Contactar</a></button>
            <div class="menu">
             <button class="dropdown">
             <ul>
               <li><a href="../../index_pagina.html">Leer Mas</a></li>
               <li><a href="../../index_pagina.html">Volver Al Inicio</a></li>
               <li><a href="../../formularios/html/formulario.html">Ir Al Formulario</a></li>
              </ul>
             </button>
            </div>
           </div>
          </li>
          <li class="adobe-product">
           <div class="products">
            Hablar con amigos 
           </div>
         
           <span class="status">
            <span class="status-circle"></span>
            ACTIVO</span>
           <div class="button-wrapper">
            <button class="content-button status-button"><a href="./AT/cont_amigo.php" class="non">Chat</a></button>
            <div class="pop-up">
             <div class="pop-up__title">Update This App
              <svg class="close" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
               <circle cx="12" cy="12" r="10" />
               <path d="M15 9l-6 6M9 9l6 6" />
              </svg>
             </div>
             <div class="pop-up__subtitle">Adjust your selections for advanced options as desired before continuing. <a href="#">Learn more</a></div>
             <div class="checkbox-wrapper">
              <input type="checkbox" id="check1" class="checkbox">
              <label for="check1">Import previous settings and preferences</label>
             </div>
             <div class="checkbox-wrapper">
              <input type="checkbox" id="check2" class="checkbox">
              <label for="check2">Remove old versions</label>
             </div>
             <div class="content-button-wrapper">
              <button class="content-button status-button open close">Cancel</button>
              <button class="content-button status-button">Continue</button>
             </div>
            </div>z
            <div class="menu">
             <button class="dropdown">
             <ul>
               <li><a href="../../index_pagina.html">Leer Mas</a></li>
               <li><a href="../../index_pagina.html">Volver Al Inicio</a></li>
               <li><a href="../../formularios/html/formulario.html">Ir Al Formulario</a></li>
              </ul>
             </button>
            </div>
           </div>
          </li>
          <li class="adobe-product">
           <div class="products">
            Chat online
           </div>
           <span class="status">
            <span class="status-circle green"></span>
            ACTIVO</span>
           <div class="button-wrapper">
            <button class="content-button status-button"><a href="./AT/chat.php" class="non">Chat</a></button>
            <div class="menu">
             <button class="dropdown">
             <ul>
               <li><a href="../../index_pagina.html">Leer Mas</a></li>
               <li><a href="../../index_pagina.html">Volver Al Inicio</a></li>
               <li><a href="../../formularios/html/formulario.html">Ir Al Formulario</a></li>
              </ul>
             </button>
            </div>
           </div>
          </li>
         </ul>
        </div>
        <div class="content-section">
         <div class="content-section-title">Herramientas Estudiante</div>
         <div class="apps-card">
          <div class="app-card">
           <span>
            Ver Maestros
           </span>
           <div class="app-card__subtext">Usa esta herramienta para Buscar maestros <br> de tu agrado.</div>
           <div class="app-card-buttons">
            <button class="content-button status-button"><a href="./AT/ver_maes.php" class="non">Buscar</a></button>
            <div class="menu"></div>
           </div>
          </div>
          <div class="app-card">
           <span> 
            Reportar Usuarios
           </span>
           <div class="app-card__subtext">Usa esta herramienta para Reportar usuarios del sistema.</div>
           <div class="app-card-buttons">
            <button class="content-button status-button">Reportar</button>
            <div class="menu"></div>
           </div>
          </div>
          <div class="app-card">
           <span>
                Buscar clases
           </span>
           <div class="app-card__subtext">Usa esta herramienta para buscar entre las clases en especifico</div>
           <div class="app-card-buttons">
            <button class="content-button status-button"><a href="./AT/buscar_clases.php" class="non">Buscar</a></button>
            <div class="menu"></div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="overlay-app"></div>
    </div>

    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>

