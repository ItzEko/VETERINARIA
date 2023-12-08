<?php
require_once '../pethealthBD/conexion/conexion.php';

$conexion = conexionBD();


$sql1 = "UPDATE usuarios SET 
Nombre='$nombre1',
Apellido='$apellidos1',
Telefono='$cel1',
Localidad='$localidad1',
Correo='$correo1',
Colonia='$colonia1',
Cp='$CP1' 
WHERE id_usuario = '$id'";

echo mysqli_query($conexion, $sql1);
?>