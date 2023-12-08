<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Usuarios

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Apellido VARCHAR(100) NOT NULL,
    Telefono VARCHAR(10) NOT NULL,
    Localidad VARCHAR(100) NOT NULL,
    Correo VARCHAR(100) NOT NULL,
    Colonia VARCHAR(100) NOT NULL,
    Cp VARCHAR(15) NOT NULL
)";

//USADO PARA CORREGIR UN NOMBRE
//$sql = "ALTER TABLE usuarios CHANGE COLUMN Telfono Telefono VARCHAR(10) NOT NULL";

$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>