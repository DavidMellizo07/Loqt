<?php
session_start();
include("../PHP/conexion.php");
$conn = connection();

if(isset($_GET['id']) && isset($_GET['estado'])) {
    $id = $_GET['id'];
    $estado = $_GET['estado'];

    // Cambiar el estado del usuario
    $nuevoEstado = ($estado == 'activo') ? 'inactivo' : 'activo';
    $sql = "UPDATE registros SET estado='$nuevoEstado' WHERE id='$id'";
    $resultado = mysqli_query($conn, $sql);

    if($resultado) {
        // Redirigir a la página anterior o a cualquier otra página deseada
        header("Location: listar.php");
        exit();
    } else {
        echo "Error al cambiar el estado del usuario.";
    }
} else {
    echo "No se proporcionó ID de usuario o estado.";
}
?>
