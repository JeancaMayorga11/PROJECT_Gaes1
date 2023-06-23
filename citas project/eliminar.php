<?php

include("agen_conexion.php");

$id = $_GET["id"];
$eliminar = "DELETE FROM Usuario WHERE ID_usuario = '$id'";

$resultadoEliminar = mysqli_query($connect, $eliminar);

if($resultadoEliminar){
    header("Location: crud.php");    
}else {
    echo "<script>alert('No se pudo eliminar');window.history.go(-1);</script>";
}