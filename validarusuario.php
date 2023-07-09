<?php
$email = $_POST['Email'];
$clave = $_POST['Clave'];
session_start();
$_SESSION['Email']=$email;
include("conexion.php");

$consulta = "SELECT*FROM usuario where Email='$email' and Contrasena='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['fk_ID_perfil']==1){ //Administrador
    header('location:/iniciodash.php');
}else
if($filas['fk_ID_perfil']==2 ){ //Tecnico
    header("location:/iniciodash.php");
}else
if($filas['fk_ID_perfil']==3 ){ //Cliente
    header("location:index.php");
}

else{
    ?>
    <?php
    include("login.php");
    ?>
    <style>
        .bad{
            color:aliceblue;
            text-align: center;
        }
    </style>
    <h1 class="bad">ERROR EN LA AUTENTICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
