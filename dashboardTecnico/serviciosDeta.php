<?php
include("conexion.php");

$estudiantes = "SELECT * FROM servicio";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
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
        <li>
          <a href="serviciosEstado.php">
            <i class="bx bxs-user"></i>
            <span>Estado </span>
          </a>
        </li>
        <li class="active">
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
            <h4>Detalles del servicio</h4>
            <form action="insertarDeta.php" method="post">
            <form action="tabla.php" method="post">
                <label>Digite el ID del servicio</label><br><br>
                <input class="controls" type="number" placeholder="IDservicio" name="idservicio" required>
                <label> Marca de equipos</label>
                <br>
                <input type="radio" value="GL" name=" Marca">GL : $150.000<br>
                <input type="radio" value="Rotenso" name=" Marca">Rotenso : $100.000<br>
                <input type="radio" value="Gree" name=" Marca">Gree : $180.000<br>
                <input type="radio" value="Mitsubishi" name=" Marca">Mitsubishi : $200.000<br>
                <br>
              
                <label>Cantidad de equipos</label><br><br>
                <input class="controls" type="number" placeholder="Cantidad de equipos" name="Equipos" required>
                <label>Elementos</label>
                <br>
                <input type="radio" value="ELemento1" name="Elemento">ELemento1 : $150.000<br>
                <input type="radio" value="ELemento2" name="Elemento">ELemento2 : $100.000<br>
                <input type="radio" value="ELemento3" name="Elemento">ELemento3: $180.000<br>
                <input type="radio" value="ELemento4" name="Elemento">ELemento4 : $200.000<br>
                <br>
                
                
                <label>Cantidad de ELementos</label><br><br>
                <input class="controls" type="number" placeholder="Cantidad de elementos" name="CantidadE" required>
                <label>Duración</label><br><br>
                <input class="controls" type="number" placeholder="Horas" name="Duracion" required>


                <input class="botons" type="submit" name="registrar" value="Enviar">
              </select>
            </form>
            

            </form>
        
    </section>
    
    

    
</body>
</html>