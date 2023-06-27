<?php
include("conexion.php");

$estudiantes = "SELECT * FROM elemento";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="sidebar">
      <div class="logo"></div>
      <ul class="menu">
        <li>
          <a href="inicio.php">
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
          <a href="#">
            <i class="bx bxs-hard-hat"></i>
            <span>Servicio</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-package"></i>
            <span>Inventario</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-log-out"></i>
            <span>Cerrar sesion</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="main">
        <div class="form-register">
            <h4>Elementos</h4>
            <form action="insertar.php" method="post">
            <form action="tabla.php" method="post">
                <label>Digite el nombre del elemento: </label><br><br>
                <input class="controls" type="text" placeholder="Nombre" name="name" required>
                
                <label>Cantidad: </label><br><br>
                <input class="controls" type="number" placeholder="Cantidad" name="cantidad" required>
                
                <label>Precio: </label><br><br>
                <input class="controls" type="number" placeholder="Precio" name="precio" required>
                <input class="botons" type="submit" name="registrar" value="Enviar">
            </form>
            </form>
        </div>
    
        <div class="container-table">
            <div class="table__title">Elementos</div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Cantidad</div>
            <div class="table__header">Precio</div>
            <?php $resultado = mysqli_query($conexion, $estudiantes);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Cantidad"];?></div>
            <div class="table__item"><?php echo $row["Precio"];?></div>
            
            <?php } mysqli_free_result($resultado);?>
        </div>
    </section>
    


</body>
</html>