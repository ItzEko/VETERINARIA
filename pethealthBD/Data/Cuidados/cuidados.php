<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Cuidados

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE cuidados (
    id_cuidados INT AUTO_INCREMENT PRIMARY KEY,
    Nombre_animal VARCHAR(200) NOT NULL,
    Especie VARCHAR(200) NOT NULL,
    Mensaje VARCHAR(500) NOT NULL,
    Cuidados VARCHAR(500) NOT NULL,
    Imagen_cuidados VARCHAR(200) NULL
)";

$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>