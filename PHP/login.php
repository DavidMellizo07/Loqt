<?php
session_start();
include("conexion.php");
$conn = connection(); // Corregido el nombre de la variable de conexión

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

// Consulta para verificar credenciales y estado activo
$sql = "SELECT * FROM registros WHERE correo='$correo' AND contraseña='$contraseña' AND estado='activo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    $row = $result->fetch_assoc();
    $_SESSION['correo'] = $correo;
    $_SESSION['rol'] = $row['rol'];
    // Redirigir al usuario según su rol
    if ($row['rol'] === 'administrador') {
        header("Location:../USERS/admin.php");
    } elseif ($row['rol'] === 'supervisor') {
        header("Location:../USERS/supervisor.php");
    } else {
        header("Location:../USERS/usuario.php");
    }
    exit; // Asegurarse de que el script se detenga después de la redirección
} else {
    echo "<script>alert('Correo electrónico o contraseña incorrectos o cuenta desactivada.');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit; // Asegurarse de que el script se detenga después de la redirección
}
?>
