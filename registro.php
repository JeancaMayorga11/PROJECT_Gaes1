<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Register account A.C.S.S</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/registrousuario.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="icon" href="images/Register.png">

</head>
<body>

<div class="container">
	<div class="signup-form">

    <form action="insertarusuario.php" method="post" class="container__form">


		<div class="log">
			<img src="images/acss-removebg-preview (1).png" alt="logo" width="30%">
		</div>
		<br>

        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control " name="nombre" placeholder="Nombre" required></div>
				<div class="col"><input type="text" class="form-control" name="apellido" placeholder="Apellido" required></div>
			</div>        	
		<div>
			<select name="tipoidentificacion" id="" class="form-control mt-2" required>
            <option name ="identificacion" value="">Tipo de identificación</option>
            <option name ="identificacion" value="Cedula de ciudadania">Cedula de ciudadania</option>
            <option name ="identificacion" value="Cedula de extranjeria">Cedula de extranjeria</option>
            <option name ="identificacion" value="Pasaporte">Pasaporte</option>
			</select>

			<input type="number" class="form-control mt-2" name="identificacion" placeholder="Identificación" required >
			<input type="number" class="form-control mt-2" name="celular" placeholder="Numero de celular" required >
			<input type="email" class="form-control mt-2" name="email" placeholder="Email" required >
			<!--<input type="text" class="form-control mt-2" name="usuario" placeholder="Confimar email" required="required">-->
            <input type="password" class="form-control mt-2" name="contraseña" placeholder="Contraseña" required >
            <!--<input type="password" class="form-control mt-2" name="confirmar contraseña" placeholder="Confirmar contraseña" required="required">-->
        </div>
			<input class="mt-3"type="checkbox"  style="color:#000000" >Aceptar <a href="#" style="color: #1c3875;">Términos</a> y <a href="#" style="color: #1c3875;"required="required"> política de privacidad  </a>
		</div>
		<br>
		<div>
		<button type="submit" class="btn btn-lg btn-block text-light" href="login.php" style="background-color: #1c3875; ">Crear usuario</button>
	
        </div>
		<p class="btn1 btn-lg btn-block text-black">¿Tiene usted una cuenta? <a href="login.php">Iniciar sesión</a></p>
    </form>
	</div>
</div>

</body>
</html>
