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
        <li>
          <a href="iniciodash.php">
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
          <a href="#">
            <i class="bx bxs-book-bookmark"></i>
            <span>Cita</span>
          </a>
        </li>
        <li class="active">
          <a href="servicios.php">
            <i class="bx bxs-hard-hat"></i>
            <span>Servicio</span>
          </a>
        </li>
        <li >
          <a href="inventario.php">
            <i class="bx bxs-package"></i>
            <span>Inventario</span>
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
                <label>Digite el ID de la cita</label><br><br>
                <input class="controls" type="number" placeholder="IDcita" name="idcita" required>
                <label>Digite el tipo de servicio </label>
                <br>
                <input type="radio" value="Instalacion" name="tiposervicio">Instalacion<br>
                <input type="radio" value="Mantenimiento" name="tiposervicio">Mantenimiento<br>
                <br>                 
                <label>Estado del servicio</label>
                <br>
                <input type="radio" value="Activo" name="estado">Activo<br>
                <input type="radio" value="Inativo" name="estado">Inactivo<br>
                <br>    
                <input class="botons" type="submit" name="registrar" value="Enviar">
            </form>

            </form>
        </div>
        <div class="container-table">
        <div class="table__title">Datos servicio</div>
        <div class="table__header">ID_servicio</div>
        <div class="table__header">Tipo</div>
        <div class="table__header">Estado</div>


        <?php $resultado = mysqli_query($conexion, $estudiantes);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["ID_servicio"];?></div>
            <div class="table__item"><?php echo $row["Tipo"];?></div>
            <div class="table__item"><?php echo $row["Estado"];?></div>
            
            <?php } mysqli_free_result($resultado);?>
    </div>
    </section>
    

    
</body>
</html>