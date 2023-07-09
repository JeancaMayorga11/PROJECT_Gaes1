<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="icon" href="images/user.jfif">
        <link rel="stylesheet" href="css/login.css">
        <script src="https://code.jquerly.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="contact_form">
            <div class="formulario">
                <div class="log">
                    <img src="images/acss-removebg-preview (1).png" alt="logo" width="70%">
                </div>

                
            <form method="post" action="validarusuario.php" >

                <label for="email" class="Email"></label>
                <input type="text" name="Email" id="email" placeholder="Correo">        
                    <label for="password"></label>
            <input type="password" name="Clave" id="Clave"  placeholder="contraseña ">                        
            <button  type="submit" href="#"   name="enviar_formulario" id="enviar"><p>Ingresar</button></p>
        </form>
        </div>            
        <div class="modal-footer" >
            <a class="text-success" style="margin-right: 50px; color: black;" href="send_email.html">Has olvidado tu contraseña </a>        
            <a href="registro.php" style="color: black;">Registrarse</a>
        </div>
        </div>
    </body>
</html>
