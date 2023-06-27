<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['name'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];


$actualizar = "UPDATE elemento SET Nombre ='$nombre' , Cantidad='$cantidad' , Precio='$precio' WHERE COD_elemento ='$id'";

$resultado=mysqli_query($conexion, $actualizar);


if($resultado){
    echo "<script>alert('Se han actualizado los cambios correctamente');
    window.location='/inicio.php';</script>";

}else {
    echo "<script>alert('No se pudieron actualizar los datos');window.history.go(-1);</script>";
}