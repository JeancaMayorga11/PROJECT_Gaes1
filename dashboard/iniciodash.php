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
$estudiantes = "SELECT * FROM servicio";

$elementos = "SELECT * FROM elemento";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/iniciodash.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
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
          <a href="#">
            <i class="bx bxs-book-bookmark"></i>
            <span>Cita</span>
          </a>
        </li>
        <li>
          <a href="servicios.php">
            <i class="bx bxs-hard-hat"></i>
            <span>Servicio</span>
          </a>
        </li>
        <li>
          <a href="inventario.php">
            <i class="bx bxs-package"></i>
            <span>Inventario</span>
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
      <div class="container-table container-table--edit">
          <div class="table__title table__title--edit">Elementos</div>
          <div class="table__header">Nombre</div>
          <div class="table__header">Cantidad</div>
          <div class="table__header">Precio Unitario</div>
          <div class="table__header">Operación</div>
          <?php $resultado = mysqli_query($conexion, $elementos);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Cantidad"];?></div>
            <div class="table__item"><?php echo $row["Precio"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["COD_elemento"];?>" class="table__item__link__edit">Editar</a> 
                </div>
            <?php } mysqli_free_result($resultado);?>
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
      <script src="confirmacion.js"></script>
    </section>

</body>
</html>
