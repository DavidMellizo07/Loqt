<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo Quiero Todo</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style-Login.css">
    <title>Inicio</title>
    
</head>
<body>
    <canvas></canvas>
    <div class="container">
    <div class="row footer">

    </div>
    </div>

    <div class="formulario">
        <h1>Inicio de sesion</h1>
        <form action="PHP/login.php" method="POST">

        <div class="username">
                <input type="text" name="correo" id="correo" required>
                <label>Correo</label>
        </div>

        <div class="contraseña">
                <input type="password" name="contraseña" id="contraseña" required>
                <label>Contraseña</label>
        </div>

            <div class="recordar">¿Olvido su contraseña?</div>
            <input type="submit" value="Iniciar">
            
            <div class="Registrarse">
                 <a href="PHP/registro.php">Registrarse</a>
            </div>
        </form> 
          
    </div>
    <script type="module" src="JS/script.js"></script>
</body>
</html>
