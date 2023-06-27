<?php
include("conexion.php");

$estudiantes = "SELECT * FROM elemento";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tabla.css">
</head>
<body>

    <div class="container-table">
        <div class="table__title">Elementos<a href="edicion.php" class="title_edit">Edicion</a></div>
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

    </body>
</html>
