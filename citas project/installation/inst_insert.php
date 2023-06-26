<?php

include("inst_conexion.php");
include ("inst_controlador.php");

$nombre = $_POST['name'];
$email = $_POST['correo'];
$identificacion = $_POST['id_cliente'];
$celular = $_POST['telephone'];
$direccion = $_POST['adress'];
$ciudad = $_POST['city'];

$f_inst = $_POST['date'];
$h_inst = $_POST['time'];




$insertar = "INSERT INTO Cita (FechaVisita, HoraVisita) VALUES ('$f_inst','$h_inst')";


$resultado = mysqli_query($connect, $insertar);

if($resultado){
    echo "<script>alert('Se ha agendado la cita con éxito');
    </script>";

}else {
    echo "<script>alert('Error al agendar la cita'); window.history.go(-1);</script>";
}