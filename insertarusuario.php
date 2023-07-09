<?php

include("conexion.php");


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipoidentificacion = $_POST['tipoidentificacion'];
$identificacion = $_POST['identificacion'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$habilitado = 1;
$rol = 3;




$insertar = "INSERT INTO usuario (ID_usuario,Nombres,Apellidos,Telefono,Tipoidentificacion,Email,Contrasena,fk_ID_habilitado,fk_ID_perfil) VALUES ('$identificacion','$nombre','$apellido','$celular','$tipoidentificacion','$email','$contraseña','$habilitado','$rol')";


$resultado = mysqli_query($conexion, $insertar);

if($resultado){
    echo "<script>alert('Usuario registrado');
    window.location='/login.php'</script>";

}else {
    echo "<script>alert('No se puedo registrar');window.history.go(-1);</script>";
}
