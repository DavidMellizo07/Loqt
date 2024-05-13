<?php
    session_start();
    include("conexion.php");
    $conn = connection(); // Corregido el nombre de la variable de conexión
    
    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    // Asignar automáticamente el rol y el estado
    $rol = 'usuario'; // Por defecto
    $estado = 'activo'; // Por defecto

    // Crear una conexión a la base de datos
    $conn = connection();

    // Verificar si la conexión es exitosa
    if ($conn) {
        // Consulta para insertar datos en la base de datos
        $sql = "INSERT INTO registros VALUES ('','$nombre', '$correo', '$contraseña', '$rol', '$estado')";

        // Ejecutar la consulta
        if (mysqli_query($conn, $sql)) {
            // Redirigir al usuario según su rol
            if ($rol === 'administrador') {
                header("Location: ../USERS/admin.php");
                exit; // Asegúrate de terminar el script después de redirigir
            } elseif ($rol === 'supervisor') {
                header("Location: ../USERS/supervisor.php");
                exit; // Asegúrate de terminar el script después de redirigir
            } else {
                header("Location: ../USERS/usuario.php");
                exit; // Asegúrate de terminar el script después de redirigir
            }
        } else {
            echo "Error al registrar: " . mysqli_error($conn);
        }

        // Cerrar la conexión
        mysqli_close($conn);
    } else {
        echo "Error de conexión a la base de datos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Style-registro.css">
    <title>Registro</title> 

</head>
<body>
    <canvas></canvas>
        <div class="container">
        <div class="row footer">

        </div>
        </div>

    <div class="registro-form">
        <h2>Registro</h2>
        
        <form id="registroForm" action="#" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre de Usuario" required>
    
            <label for="correo">Correo Electrónico: </label>
            <input type="email" id="correo" name="correo" placeholder="Correo Electrónico" required>
    
            <label for="contraseña">Contraseña: </label>
            <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required>
    
            <input type="submit" value="Registrarse">
        </form>
    </div>
    <script type="module" src="JS/script.js"></script>
</body>
</html>