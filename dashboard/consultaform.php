<?php

session_start();
error_reporting(0);
$varsesion = $_SESSION['Email'];
if ($varsesion == null || $varsesion=''){
  header("location:/index.php");
  die();
}
?>
<?php
include("conexion.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/sidebar.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
            <a href="iniciodash.php">
                <i class="bx bxs-home"></i>
                <span>Inicio</span>
            </a>
            </li>
            <li>
            <a href="#">
                <i class="bx bxs-user"></i>
                <span>Perfil</span>
            </a>
            </li>
            <li>
            <a href="#">
                <i class="bx bxs-book-bookmark"></i>
                <span>Cita</span>
            </a>
            </li>
            <li>
            <a href="servicios.php">
                <i class="bx bxs-hard-hat"></i>
                <span>Servicio</span>
            </a>
            </li>
            <li>
            <a href="inventario.php">
                <i class="bx bxs-package"></i>
                <span>Inventario</span>
            </a>
            </li>
            <li class="active">
            <a href="#">
                <i class="bx bx-search-alt"></i>
                <span>Consulta</span>
            </a>
            </li>
            <li>
            <a href="cerrarsesion.php">
                <i class="bx bxs-log-out"></i>
                <span>Cerrar sesion</span>
            </a>
            </li>
        </ul>
        </div>
<section class="main">
    <div class="form-register">
        <form action="" method="post">
                <label>Consulta </label>
                <input type="text"  class="controls" name="palabraclave" placeholder="Buscar por nombre">
                <select name="categoria" id="" class="controls"> 
                <option value="">Todas las categorias</option>
                <option name ="categoria" value="Equipo">Equipo</option>
                <option name ="categoria" value="Repuesto">Repuesto</option>
                <option name ="categoria" value="Herramienta">Herramienta</option>
			    </select>
                <input type="radio" value="1" class="controls1" name="precioa">Precio de mayor a menor<br>
                <input type="radio" value="0" class="controls1" name="preciob">Precio de menor a mayor<br>
                <br>

                <input type="radio" value="1" class="controls1" name="cantidadmax">Cantidad de mayor a menor<br>
                <input type="radio" value="0" class="controls1" name="cantidadmin">Cantidad de menor a mayor<br>

                <input class="botons" type="submit" name="registrar" value="Buscar">      
        </form>
    </div>
    


<?php

if (isset($_POST['palabraclave'])) {
    $palabraclave = $_POST['palabraclave'];
} 

if (isset($_POST['categoria'])) {
    $categoria = $_POST['categoria'];

}
if (isset($_POST['precioa'])) {
    $precioalto = $_POST['precioa'];

}
if (isset($_POST['preciob'])) {
    $preciobajo = $_POST['preciob'];
}

if (isset($_POST['cantidadmax'])) {
    $cantidadmax = $_POST['cantidadmax'];
}

if (isset($_POST['cantidadmin'])) {
    $cantidadmin = $_POST['cantidadmin'];
}


$sql = "SELECT * FROM ELEMENTO ";


if (!empty($palabraclave)){
    $sql .= "WHERE(nombre LIKE '%$palabraclave%')";
}


if (!empty($categoria)){
    $sql .= "WHERE(categoria LIKE '$categoria')";
} 

if (!empty($precioalto)){
    $sql .= "ORDER BY Precio DESC";
} 

if (!empty($precioabajo)){
    $sql .= "ORDER BY Precio ASC";
} 

if (!empty($cantidadmax)){
    $sql .= "ORDER BY Cantidad DESC";
} 

if (!empty($cantidadmin)){
    $sql .= "ORDER BY Cantidad ASC";
} 

?>
<div class="container-table">
            <div class="table__title">Elementos</div>
            <div class="table__header">Nombre</div>
            <div class="table__header">Cantidad</div>
            <div class="table__header">Precio</div>
            <div class="table__header">Categoria</div>
            <?php $resultado = mysqli_query($conexion, $sql);
        while ($fila = mysqli_fetch_assoc($resultado)){?>
            <div class="table__item"><?php echo $fila["Nombre"];?></div> 
            <div class="table__item"><?php echo $fila["Cantidad"];?></div>  
            <div class="table__item"><?php echo $fila["Precio"];?></div>  
            <div class="table__item"><?php echo $fila["Categoria"];?></div> 
            
            <?php } mysqli_free_result($resultado);?>


            </section>
</body>
</html>
