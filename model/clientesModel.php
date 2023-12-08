<?php
require_once '../pethealthBD/conexion/conexion.php';
$conexion = conexionBD();

$sql="INSERT INTO usuarios(Nombre, Apellidos, Telefono, Localidad, Correo, Colonia, CP)
Values('$nombre', '$apellidos', '$cel', '$localidad', '$correo', '$colonia')"
?>