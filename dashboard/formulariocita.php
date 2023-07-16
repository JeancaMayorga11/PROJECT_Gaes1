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

$Usuario = "SELECT * FROM Citas";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar cita</title>
    <link rel="icon" href="/pictures/citas.png">
    <link rel="stylesheet" href="css/formulariocita.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
</head>
<body>

    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li>
          <a href="dashcliente.php">
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
    <section class="main">
        <div class="form-register">
            <h4>Citas</h4>
           
            
              
                <label>Digite su ciudad de residencia</label><br>
                <input class="controls mt-2" type="text" placeholder="Ciudad" name="idcita" required>
                <label>Digite su dirección de residencia</label><br>
                <input class="controls mt-2" type="text" placeholder="Dirección" name="idcita" required>
                <label>Tipo de servicio </label>
                <br>
                <input class="mt-3" type="radio" value="Instalacion" name="tiposervicio" required>Instalación<br>
                <input class="mt-2" type="radio" value="Mantenimiento" name="tiposervicio" required >Mantenimiento<br>
                <br>                 
                <label>Fecha de la cita</label><br>
                <input class="controls mt-2" type="date"  min= "2023-07-17" max="2023-12-30" name="fecha" id="fcita" required>
                

                <label>Hora de la cita</label><br>
                <input class="controls mt-2"  type="time" name="hora" min="08:00" max="18:00" required>
                <br>    
                <input class="botons" type="submit" name="registrar" value="Agendar cita">
            </form>

            </form>

    </section>
    

    
</body>
</html>
