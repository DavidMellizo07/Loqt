<?php
session_start();
include("../PHP/conexion.php"); // Ajusta la ruta según sea necesario
$conn = connection(); // Inicializa la conexión a la base de datos

$sql = "SELECT * FROM registros";
$query = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/Style-admin.css">
    <title>Lo Quiero Todo</title>
    <style>
    </style>
</head>
<body>
        <nav class = "sidebar close">
            <header>
                <div class="image-text">
                    <span class="image">
                        <img src="../CSS/LOGO.png" alt="logo">
                    </span>

                    <div class="text header-text">
                        <span class="name">Lo Quiero Todo</span>
                        <span class="profession">Supervisor</span>
                    </div>
                </div>

                <i class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="menu">
                    <li class="search-box">
                        <i class='bx bx-search icon' ></i>
                            <input type="search" placeholder="Buscar...">
                    </li>
                    <ul class="menu-links">
                        <li class="nav-link">
                            <a href="usuario.php">
                                <i class='bx bx-home icon'></i>
                                <span class="text nav-text">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-bell icon'></i>
                                <span class="text nav-text">Notificaciones</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-archive icon'></i>
                                <span class="text nav-text">Archivos</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="bottom-content">
                    <li class="">
                        <a href="cerrar_sesión.php">
                            <i class='bx bx-log-out icon'></i>
                            <span class="text nav-text">Cerrar Sesión</span>
                        </a>
                    </li>
                            
                    <li class="mode">
                        <div class="moon-sun">
                            <i class='bx bx-moon icon moon' ></i>
                            <i class='bx bx-sun icon sun' ></i>
                        </div>
                        <span class="mode-text text">Modo oscuro</span>

                        <div class="toggle-switch">
                            <span class="switch"></span>
                        </div>
                    </li>
                </div>
            </div>
        </nav>

        <section class="home">
            <div class="text">Inicio</div>
        </section>
    <script src="../JS/PHP.js"></script>
</body>
</html>