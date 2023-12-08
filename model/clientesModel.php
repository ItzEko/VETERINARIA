<?php
require_once '../pethealthBD/conexion/conexion.php';
$conexion = conexionBD();

$sql="INSERT INTO usuarios(Nombre, Apellido, Telefono, Localidad, Correo, Colonia, Cp)
Values('$nombre', '$apellidos', '$cel', '$localidad', '$correo', '$colonia', '$CP')";

echo mysqli_query($conexion, $sql);
?>