<?php
include("conexion.php");

$elementos = "SELECT * FROM elemento";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tabla.css">
</head>
<body>

    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">Elementos</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Precio</div>
        <div class="table__header">Operación</div>
        <?php $resultado = mysqli_query($conexion, $elementos);
        while($row=mysqli_fetch_assoc($resultado)) { ?>
            <div class="table__item"><?php echo $row["Nombre"];?></div>
            <div class="table__item"><?php echo $row["Cantidad"];?></div>
            <div class="table__item"><?php echo $row["Precio"];?></div>
            <div class="table__item">
                <a href="actualizar.php?id=<?php echo $row["COD_elemento"];?>" class="table__item__link">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["COD_elemento"];?>" class="table__item__link">Eliminar</a></div>
            <?php } mysqli_free_result($resultado);?>
    </div>
    <script src="confirmacion.js"></script>

    </body>
</html>
