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
<body>
<div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li class="active">
          <a href="iniciodash.php">
            <i class="bx bxs-home"></i>
            <span>Inicio</span>
          </a>
        </li>
        <li>
          <a href="serviciosEstado.php">
            <i class="bx bxs-user"></i>
            <span>Estado servicio</span>
          </a>
        </li>
        <li>
          <a href="serviciosFactura.php">
            <i class="bx bxs-hard-hat"></i>
            <span>Factura</span>
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
                <input class="controls" type="number" placeholder="idusuario" name="idusuario" required>
                <label>Digite el ID de la cita</label><br><br>
                <input class="controls" type="number" placeholder="IDcita" name="idcita" required>
                <br>                 
                <label>Estado del servicio</label>
                <br>
                <input type="radio" value="Activo" name="Estado">Activo<br>
                <input type="radio" value="Inativo" name="Estado">Inactivo<br>
                <br>
                <label>Reporte del servicio</label><br><br>
                
                <textarea class="controls" name="Descripcion" id="Descripcion" ></textarea>
                <br> 
                <input class="botons" type="submit" name="registrar" value="Enviar">
            </form>

            

            </form>
    </section>    
</body>
</html>