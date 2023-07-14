<?php
include("conexion.php");
$estudiantes = "SELECT * FROM servicio";

$Factura = "SELECT * FROM Factura";
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
      <div class="container-table">
          <div class="table__title table__title--editF">Datos de la factura</div>
          <div class="table__header">Equipos</div>
          <div class="table__header">Marca</div>
          <div class="table__header">Duración</div>
          <div class="table__header">Elementos</div>
          <div class="table__header">Cantidad</div>
          <div class="table__header">IDServicio</div>
          
          <?php $resultado = mysqli_query($conexion, $Factura);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Equipos"];?></div>
            <div class="table__item"><?php echo $row["Marca"];?></div>
            <div class="table__item"><?php echo $row["Duracion"];?></div>
            <div class="table__item"><?php echo $row["ElementoT"];?></div>
            <div class="table__item"><?php echo $row["CantidadE"];?></div>
            <div class="table__item"><?php echo $row["fk_ID_servicio"];?></div>
            
            
            <?php } mysqli_free_result($resultado);?>
      </div>

      <div class="container-table ">
        <div class="table__title">Datos servicio </div>
        <div class="table__header">ID_Usuario</div>
        <div class="table__header">ID_Cita</div>
        <div class="table__header">Descripción</div>
        <div class="table__header">Estado</div>
        <div class="table__header">operacion</div>
        
        
        <?php $resultado = mysqli_query($conexion, $estudiantes);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["fk_ID_usuario"];?></div>
            <div class="table__item"><?php echo $row["fk_ID_cita"];?></div>
            <div class="table__item"><?php echo $row["Descripcion"];?></div>
            <div class="table__item"><?php echo $row["Estado"];?></div>
            <div class="table__item">
                <a href="ActualizarServi.php?id=<?php echo $row["ID_servicio"];?>" class="table__item__link__edit">Editar</a> 
                <a href="EliminarServi.php?id=<?php echo $row["ID_servicio"];?>"class="table__item__link__delete"></a></div>
            
            
            
            <?php } mysqli_free_result($resultado);?>
    </div>
      <script src="confirmacion.js"></script>
    </section>

</body>
</html>