<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="/css/formulario.css">
</head>

<body>
    <section class="form-register">
        <h4>Elementos</h4>
        <form action="insertar.php" method="post">
        <form action="tabla.php" method="post">
    
            <label for="">Digite el nombre del elemento: </label><br><br>
            <input class="controls" type="text" placeholder="Nombre" name="name" required>
            <br>
            <br>
            <label for="">Cantidad: </label><br><br>
            <input class="controls" type="number" placeholder="Cantidad" name="cantidad" required>
            <br>
            <br>
            <label for="">Precio: </label><br><br>
            <input class="controls" type="number" placeholder="Precio" name="precio" required>
            <br>
            <br>
            <input class="botons" type="submit" name="registrar" value="Enviar">
        </form>
    </section>

</body>

</html>