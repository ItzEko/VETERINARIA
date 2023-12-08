<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Recordatorios

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE Recordatorio (
    id_recordatorio INT AUTO_INCREMENT PRIMARY KEY,
    Respuesta VARCHAR(300) NOT NULL,
    Fecha_envio DATE NOT NULL,
    id_usuario INT NOT NULL,
    id_vet INT NOT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario),
    FOREIGN KEY (id_vet) REFERENCES veterinario (id_vet)
)";
$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>