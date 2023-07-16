<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['Email'];
if ($varsesion == null || $varsesion=''){
  header("location:/index.php");
  die();
}
?>
<?php
include("conexion.php");

$Cita = "SELECT * FROM cita";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario cliente</title>
    <link rel="stylesheet" href="css/dashcliente.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
        <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
            <a href="#">
                <i class="bx bxs-home"></i>
                <span>Inicio</span>
            </a>
            </li>
            <li>
            <a href="#">
                <i class="bx bxs-user"></i>
                <span>Perfil</span>
            </a>
            </li>
            <li>
            <a href="cerrarsesion.php">
                <i class="bx bxs-log-out"></i>
                <span>Cerrar sesion</span>
            </a>
            </li>
        </ul>
    </div>
    <h3 class= "text-dark" style="margin-top: 18%; margin-left: 30%;"> No tiene citas programadas por el momento</h3>
    <div>
    <a href="formulariocita.php" class=" btn btn-lg" style="color: rgb(255, 255, 255); background-color: rgb(39, 58, 134);margin-top: 200%; margin-left: -235%;">Agendar cita</a>
    </div>
</body>
</html>
