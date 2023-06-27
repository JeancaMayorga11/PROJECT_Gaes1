<?php
include("conexion.php");

$estudiantes = "SELECT * FROM servicio";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/tablaservicio.css">
</head>
<body>

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

    </body>
</html>
