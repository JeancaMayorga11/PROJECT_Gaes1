<?php

include("inst_conexion.php");

$idU = $_GET["idU"];
$idC = $_GET["idC"];

$eliminarU = "DELETE FROM Usuario WHERE ID_usuario = '$idU'";
$eliminarC = "DELETE FROM Usuario WHERE ID_usuario = '$idC'";


$resultadoEliminar = mysqli_query($connect, $eliminarU, $eliminarC);

if($resultadoEliminar){
    header("Location: inst_crud.php");    
}else {
    echo "<script>alert('No se pudo eliminar');window.history.go(-1);</script>";
}