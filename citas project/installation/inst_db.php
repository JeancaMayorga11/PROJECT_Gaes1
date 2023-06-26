<?php

include("inst_conexion.php");


$citas = "SELECT * FROM Cita";
$usuarios = "SELECT * FROM Usuario";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/db.css">
</head>
<body>

    <div class="container-table">

        <div class="table__title">User information <a href="crud.php" class="title_update">Actualización</a></div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Correo electrónico</div>
        <div class="table__header">Número de documento</div>
        <div class="table__header">Número de clular</div>
        <div class="table__header">?Dirección</div>
        <div class="table__header">Ciudad de residencia</div>
        <div class="table__header">fecha de instalación</div>
        <div class="table__header">Horario de instalación</div>

        <?php $resultado = mysqli_query($connect, $citas, $usuarios);

        while($row=mysqli_fetch_assoc($resultado)) { ?>

            <div class="table__item"><?php echo $row["ID_usuario"];?></div>
            <div class="table__item"><?php echo $row["Email"];?></div>
            <div class="table__item"><?php echo $row["Nombres"];?></div>
            <div class="table__item"><?php echo $row["Telefono"];?></div>
            <div class="table__item"><?php echo $row["Ciudad"];?></div>
            <div class="table__item"><?php echo $row["Direccion"];?></div>

            <div class="table__item"><?php echo $row["FechaVisita"];?></div>
            <div class="table__item"><?php echo $row["HoraVisita"];?></div>

            <?php } mysqli_free_result($resultado);?>

            
        </div>

    </body>
</html>