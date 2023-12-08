<?php 
require_once '../pethealthBD/conexion/conexion.php';

$conexion = conexionBD();

$id = $_POST['id'];

$sql = "DELETE  FROM usuarios where id_usuario = $id";
echo mysqli_query($conexion, $sql);
?>