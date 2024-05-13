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
    <title>Administrador</title>
    <style>
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            table-layout: fixed;
        }

        table tr{
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: 4px;
        }

        table th{
            padding: 16px;
            text-align: center;
            font-size: .85em;
        }

        .Editar{
            background: #009688;
            padding: 6px;
            color: #fff;
            text-align: center;
            font-weight: bold;
            text-decoration: none;
        }

        .Eliminar{
            background-color: crimson;
            padding: 6px;
            color: #fff;
            text-align: center;
            font-weight: bold;
            text-decoration: none;
        }

        .CambiarEstado{
            text-align: center;
            font-weight: bold;
            padding: 6px;
            color: #fff;
            background-color: rgb(49, 117, 206);
            text-decoration: none;
        }
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
                            <a href="../USERS/admin.php">
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
                            <a href="listar.php">
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
            <div class="text">Listado</div>

            <table class="userTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th>Rol</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id']?></th>
                        <th><?= $row['nombre']?></th>
                        <th><?= $row['correo']?></th>
                        <th><?= $row['contraseña']?></th>
                        <th><?= $row['rol']?></th>
                        <th><?= $row['estado']?></th>

                        <th><a href="actualizar.php?id=<?= $row['id'] ?>" class="Editar">Editar</a></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>" class="Eliminar" >Eliminar</a></th>
                        <th><a href="estado.php?id=<?= $row['id'] ?>&estado=<?= $row['estado'] ?>" class="CambiarEstado"><?= $row['estado'] == 'activo' ? 'Desactivar' : 'Activar' ?></a></th>
                    </tr>
                    <?php endwhile;?>
                </tbody>
            </table>
        </section>
    <script src="../JS/PHP.js"></script>
</body>
</html>