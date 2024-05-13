<?php
include("../PHP/conexion.php");
$conn=connection();

$id=$_GET['id'];

$sql="SELECT * FROM registros WHERE id='$id'";
$query=mysqli_query($conn, $sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/Style-admin.css">
    <title>Editar usuarios</title>
    
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
                    <span class="profession">Administrador</span>
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
                        <a href="admin.php">
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
                        <a href="../CRUD/listar.php">
                            <i class='bx bx-table icon'></i>
                            <span class="text nav-text">Listado</span>
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
                    <a href="../USERS/cerrar_sesión.php">
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
        <div class="text">Actualizar</div>
        <div class="users-form">
            <form action="editar_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id']?>">

                <label for="Nombre">Nombre: </label>
                <input type="text" id="Nombre" name="nombre" placeholder="Nombre" value="<?= $row['nombre']?>">

                <label for="Correo">Correo: </label>
                <input type="text" id="Correo" name="correo" placeholder="correo" value="<?= $row['correo']?>">

                <label for="Contraseña">Contraseña: </label>
                <input type="text" id="Contraseña" name="contraseña" placeholder="contraseña" value="<?= $row['contraseña']?>">

                <label for="Rol">Rol: </label>
                <input type="text" id="Rol" name="rol" placeholder="rol" value="<?= $row['rol']?>">
                

                <input type="submit" value="Actualizar">
            </form>
        </div>
    </section>
    <script src="../JS/PHP.js"></script>
</body>
</html>

