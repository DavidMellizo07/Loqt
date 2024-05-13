<?php
function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "proyecto";

    // Crear la conexión
    $connect = mysqli_connect($host, $user, $pass, $db);

    // Verificar si la conexión fue exitosa
    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    return $connect;
}
