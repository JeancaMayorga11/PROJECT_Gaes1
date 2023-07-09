<?php
include("conexion.php");
$idcita = $_POST['idcita'];
$estado = $_POST['estado'];
$tiposervicio = $_POST['tiposervicio'];
$insertar = "INSERT INTO servicio (Id_servicio, tipo, estado) VALUES ('$idcita', '$tiposervicio', '$estado')";
$resultado = mysqli_query($conexion, $insertar);
if($resultado){
    echo "<script>alert('Se ha actualizado el estado del servio ');
    window.location='/servicios.php'</script>";
}else {
    echo "<script>alert('No puedo actualizar el estado del servio');window.history.go(-1);</script>";
}
