<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Receta

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE receta (
    id_receta INT AUTO_INCREMENT PRIMARY KEY,
    Descripcion VARCHAR(300) NOT NULL,
    Vacunas VARCHAR(100) NOT NULL,
    Estado_mascota VARCHAR(200) NOT NULL,
    Recomendaciones VARCHAR (200) NOT NULL,
    id_mascota INT NULL,
    FOREIGN KEY (id_mascota) REFERENCES mascotas (id_mascota)
)";

$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>