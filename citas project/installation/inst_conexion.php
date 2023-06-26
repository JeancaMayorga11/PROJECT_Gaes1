<?php

$connect = mysqli_connect("localhost", "root", "", "ACSS");

if (!$connect) {
    die("No se pudo conectar la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($connect, "utf8");

$idcita = mysqli_insert_id($connect);

?>