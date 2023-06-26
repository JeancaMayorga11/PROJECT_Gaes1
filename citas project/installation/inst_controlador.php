<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/controlador.css">
</head>
<body>

</body>
</html>

<?php
require_once('inst_cliente.php');
require_once('inst_cita.php');
require_once('inst_insertar.php');

// Capturar datos del cliente
$nombre = $_POST['name'];
$email = $_POST['correo'];
$identificacion = $_POST['id_cliente'];
$celular = $_POST['telephone'];
$direccion = ($_POST['adress']);
$ciudad = ($_POST['city']);

// Capturar datos cita

$idcita = $_POST['id_cita'];
$f_inst = $_POST['date'];
$h_inst = $_POST['time'];




// Se proporcionan datos del cliente para la instalación
$customer = new Cliente();
$datos = $customer->crearCliente($nombre, $email, $identificacion, $celular, $direccion, $ciudad);

// Se crea asigna el cita.
$appointment = new Cita();
$data = $appointment->crearCita($idcita, $f_inst, $h_inst);


// Se imprimen todos los datos generados por las clases creadas.

echo "<link rel='stylesheet' href='controlador.css'>";
echo "<center><div class='resul_01'>";
echo " <br>N° Documento: ".$identificacion;
echo "<br>Fecha Nacimiento: ".$fecha;
echo "<br>Edad: ".$edad;
echo "<br>Descuento del 15% por estudiar ADSO es de: $".$descuento_asignados[2];
echo "<br>Descuento general por ingresar al sena: $".$descuento_asignados[1];
echo "<br>Descuento por edad: $".$descuento_asignados[0];
echo "<br>Descuento total generado: $".($descuento_asignados[0]+$descuento_asignados[1]+$descuento_asignados[2]);
echo "<br>Total a pagar en la matricula: $".$curso_asignado[1]-($descuento_asignados[0]+$descuento_asignados[1]+$descuento_asignados[2]); ?>