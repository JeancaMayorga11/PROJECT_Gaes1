<?php
include("conexion.php");
$idusuario = $_POST['idusuario'];
$idcita = $_POST['idcita'];
$Estado = $_POST['Estado'];
$Descripcion= $_POST['Descripcion'];

$insertar = "INSERT INTO Servicio (Descripcion, Estado, fk_ID_usuario, fk_ID_cita) VALUES ('$Descripcion', '$Estado', '$idusuario', '$idcita')";

$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha actualizado el estado del servio ');
    window.location='/serviciosEstado.php'</script>";
}else {
    echo "<script>alert('No puedo actualizar el estado del servio');window.history.go(-1);</script>";
}
