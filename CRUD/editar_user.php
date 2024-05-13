<?php

include("../PHP/conexion.php");
$conn = connection();

$id=$_POST["id"];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$rol = $_POST['rol'];


$sql="UPDATE registros SET nombre='$nombre', correo='$correo', contraseña='$contraseña', rol='$rol' WHERE id='$id'";
$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: listar.php");
}else{

}
