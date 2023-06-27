<?php

include("inst_conexion.php");
$idU = $_GET["idU"];
$idC = $_GET["idC"];

$usuarios = "SELECT * FROM Usuario WHERE ID_usuario = '$idU'";
$citas = "SELECT * FROM Cita WHERE ID_cita = '$idC'";

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

    <form class="container-table container-table--edit" action="procesar.php" method="post">
        
    <div class="table__title table__title--edit">User information</div>
    <div class="table__header">nombre</div>
        <div class="table__header">Correo electrónico</div>
        <div class="table__header">ID</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Dirección</div>
        <div class="table__header">Ciudad de residencia</div>
        <div class="table__header">fecha de instalación</div>
        <div class="table__header">Tiempo de instalación</div>

        <?php $resultado = mysqli_query($connect, $usuarios, $citas);

        while($row=mysqli_fetch_assoc($resultado)) { ?>

            <input type="hidden" class="table__item" value="<?php echo $row["ID_usuario"];?>" name="id">
            <input type="text" class="table__input" value="<?php echo $row["Email"];?>" name="mail">
            <input type="text" class="table__input" value="<?php echo $row["Nombre"];?>" name="nombre">
            <input type="text" class="table__input" value="<?php echo $row["Telefono"];?>" name="phone">
            <input type="text" class="table__input" value="<?php echo $row["Ciudad"];?>" name="city">
            <input type="text" class="table__input" value="<?php echo $row["Direccion"];?>" name="address">

            <input type="text" class="table__input" value="<?php echo $row["Dia_de_instalacion"];?>" name="date">
            <input type="text" class="table__input" value="<?php echo $row["Hora_de_instalacion"];?>" name="time">
            <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
            

            <?php } mysqli_free_result($resultado);?>

    </form>

    </body>
</html>
