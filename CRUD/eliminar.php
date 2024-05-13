<?php
include("../PHP/conexion.php");
$conn = connection();

$id=$_GET['id'];   

$sql = "DELETE FROM registros WHERE id='$id'";

$query = mysqli_query($conn, $sql);

if($query){
    Header("Location: ../index.php");
}else{

};

?>