<?php
include("conexion.php");
$Idservicio = $_POST['ID_servicio'];
$idusuario = $_POST['idusuario'];
$idcita = $_POST['idcita'];
$Descripcion= $_POST['Descripcion'];
$Estado = $_POST['Estado'];
$actualizar = "UPDATE servicio SET fk_ID_usuario = '$idusuario', fk_ID_cita = '$idcita', Estado = '$Estado', Descripcion = '$Descripcion' WHERE ID_servicio = '$Idservicio'";


$resultado = mysqli_query($conexion, $actualizar);
if($resultado){
    echo "<script>alert('Se ha actualizado el estado del servio ');
    window.location='/iniciodash.php'</script>";
}else {
    echo "<script>alert('No puedo actualizar el estado del servio');window.history.go(-1);</script>";
}
