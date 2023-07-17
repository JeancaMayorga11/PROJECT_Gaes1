<?php
include("conexion.php");

$estudiantes = "SELECT * FROM servicio";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/servicio.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body><div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li >
          <a href="iniciodash.php">
            <i class="bx bxs-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li class="active">
          <a href="serviciosEstado.php">
            <i class="bx bxs-user"></i>
            <span>Estado </span>
          </a>
        </li>
        <li>
          <a href="serviciosDeta.php">
            <i class="bx bxs-hard-hat"></i>
            <span>Detalles</span>
          </a>
        </li>
        <li>
          <a href="index.html">
            <i class="bx bxs-log-out"></i>
            <span>Cerrar sesion</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="main">
        <div class="form-register">
            <h4>Estado del servicio</h4>
            <form action="insertarservice.php" method="post">
            <form action="tabla.php" method="post">
                <label>Digite el ID del usuario</label><br><br>
                <input class="controls" type="number" placeholder="ID_usuario" name="idusuario" required>
                <label>Digite el ID de la cita</label><br><br>
                <input class="controls" type="number" placeholder="ID_cita" name="idcita" required>
                <br>                 
                <label>Estado del servicio</label>
                <br>
                <input type="radio" value="Activo" name="Estado">Activo<br>
                <input type="radio" value="Inativo" name="Estado">Inactivo<br>
                <br> 
                <input class="botons" type="submit" name="registrar" value="Enviar">
            </form>

            

            </form>
    </section>    
</body>
</html>