
<?php
include("conexion.php");
$idservicio = $_POST['idservicio'];
$Equipos = $_POST['Equipos'];
$Marca = $_POST['Marca'];
$Elemento = $_POST['Elemento'];
$CantidadE = $_POST['CantidadE'];
$Duracion = $_POST['Duracion'];

$verificarServicio = "SELECT ID_servicio FROM servicio WHERE ID_servicio = '$idservicio'";
$resultadoVerificacion = mysqli_query($conexion, $verificarServicio);

if (mysqli_num_rows($resultadoVerificacion) > 0) {
    $insertar = "INSERT INTO Detalle_servicio (Equipos, Marca, Duracion, ElementoT, CantidadE, fk_ID_servicio) 
    VALUES ('$Equipos', '$Marca', '$Duracion', '$Elemento', '$CantidadE', '$idservicio')";

    $resultado = mysqli_query($conexion, $insertar);


    if ($resultado) {
        echo "<script>alert('Se ha registrados la factura ');
        window.location='/serviciosDeta.php'</script>";
    } else {
        echo "<script>alert('No se pudo registrar factura');window.history.go(-1);</script>
        window.location='/serviciosDeta.php'</script>";
    }
}  else {
    echo "<script>alert('ID de servicio inválido');window.history.go(-1);</script>
    window.location='/serviciosDeta.php'</script>";
}
?>
