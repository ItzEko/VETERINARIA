<?php 
require "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Citas

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE citas (
    id_cita INT AUTO_INCREMENT PRIMARY KEY,
    fecha_cita DATE,
    id_usuario INT NOT NULL,
    id_mascota INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id_usuario),
    FOREIGN KEY (id_mascota) REFERENCES mascotas(id_mascota)
)";

$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CITAS CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>
