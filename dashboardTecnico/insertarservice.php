<?php
include("conexion.php");
$idusuario = $_POST['idusuario'];
$idcita = $_POST['idcita'];
$Estado = $_POST['Estado'];


$insertar = "INSERT INTO Servicio ( Estado, fk_ID_usuario, fk_ID_cita) VALUES ('$Estado', '$idusuario', '$idcita')";

$resultado = mysqli_query($conexion, $insertar);
if ($resultado) {
    echo "<script>alert('Se ha actualizado el estado del servicio');
    window.location='/serviciosEstado.php'</script>";
} else {
    $error = mysqli_error($conexion);
    echo "<script>alert('No se pudo actualizar el estado del servicio: $error');
    window.location='/serviciosEstado.php'</script>";
}
?>
