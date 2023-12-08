<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Adopcion

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE adopcion (
    id_adopcion INT AUTO_INCREMENT PRIMARY KEY,
    Talla VARCHAR(100) NULL,
    Energia VARCHAR(20) NULL,
    Caracter VARCHAR(100) NULL,
    id_mascota INT NOT NULL,
    id_usuario INT NOT NULL,
    FOREIGN KEY (id_mascota) REFERENCES mascotas (id_mascota),
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
)";


$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>