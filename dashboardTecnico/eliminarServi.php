<?php
include("conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM servicio  WHERE ID_servicio = '$id'";

$resultadoEliminar = mysqli_query($conexion, $eliminar);

if($resultadoEliminar){
    header("Location: iniciodash.php");    
}else {
    echo "<script>alert('No se pudo eliminar');window.history.go(-1);</script>";
}
