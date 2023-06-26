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

    <div class="container-table container-table--edit">
        <div class="table__title table__title--edit">User information</div>
        <div class="table__header">Name</div>
        <div class="table__header">Email</div>
        <div class="table__header">ID number</div>
        <div class="table__header">Telephone</div>
        <div class="table__header">Address</div>
        <div class="table__header">City of residence</div>
        <div class="table__header">Day of installation</div>
        <div class="table__header">Time of installation</div>

        <?php $resultado = mysqli_query($connect, $usuarios);

        while($row=mysqli_fetch_assoc($resultado)) { ?>

            <div class="table__item"><?php echo $row["Nombre_usuario"];?></div>
            <div class="table__item"><?php echo $row["Email_usuario"];?></div>
            <div class="table__item"><?php echo $row["Numero_documento"];?></div>
            <div class="table__item"><?php echo $row["Numero_celular"];?></div>
            <div class="table__item"><?php echo $row["Direccion"];?></div>
            <div class="table__item"><?php echo $row["Ciudad_del_usuario"];?></div>
            <div class="table__item"><?php echo $row["Dia_de_instalacion"];?></div>
            <div class="table__item"><?php echo $row["Hora_de_instalacion"];?></div>
            <div class="table__item">

                <a href="actualizar.php?id=<?php echo $row["ID_estudiante"];?>" class="table__item__link">Editar</a> |
                <a href="eliminar.php?id=<?php echo $row["ID_estudiante"];?>" class="table__item__link">Eliminar</a></div>

            <?php } mysqli_free_result($resultado);?>

    </div>
    <script src="confirmacion.js"></script>

    </body>
</html>