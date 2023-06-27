<?php

include("conexion.php");


$nombre = $_POST['name'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];



$insertar = "INSERT INTO elemento (Nombre,Cantidad,Precio) VALUES ('$nombre','$cantidad','$precio')";


$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Se ha regitrado el elemento con exito');
    window.location='/inventario.php'</script>";

}else {
    echo "<script>alert('No se puedo registrar');window.history.go(-1);</script>";
}
