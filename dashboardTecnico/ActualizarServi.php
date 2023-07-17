<?php
include("conexion.php");
$id =$_GET["id"];
$estudiantes = "SELECT * FROM servicio WHERE ID_servicio = '$id'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/Actuservicio.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="sidebar">
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
            <span>Estado servicio</span>
          </a>
        </li>
        <li>
          <a href="serviciosFactura.php">
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
        <form class="container-table container-table--edit2 " action="Procesarservi.php" method="post">
        <div class="table__title">Datos servicio </div>
        <div class="table__header">Estado</div>
        <div class="table__header">operacion</div>
        
        
        <?php $resultado = mysqli_query($conexion, $estudiantes);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
        <input type="hidden" class="table__item" value="<?php echo $row["ID_servicio"];?>" name="ID_servicio">
        <input type="hidden" class="table__itemAs" value="<?php echo $row["fk_ID_usuario"];?>" name="idusuario">
        <input type="hidden" class="table__itemAs" value="<?php echo $row["fk_ID_cita"];?>" name="idcita">
        <input type="text" class="table__itemAs" value="<?php echo $row["Estado"];?>" name="Estado">
        
        <?php } mysqli_free_result($resultado);?>
        <input type="submit" value="Actualizar" class="container__submitAA" >
    </form>
    <script src="confirmacion.js"></script>
    </section>

</body>
</html>