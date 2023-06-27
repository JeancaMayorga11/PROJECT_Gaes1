<?php
$email = $_POST['Email'];
$clave = $_POST['Clave'];
session_start();
$_SESSION['Email']=$email;
include("conexion.php");

$consulta = "SELECT*FROM usuario where Email='$email' and Clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['ID_perfil']==1){ //Administrador
    header("location:/iniciodash.php");
}else
if($filas['ID_perfil']==2){ //Cliente
    header("location:index.html");
}

else{
    ?>
    <?php
    include("login.html");
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