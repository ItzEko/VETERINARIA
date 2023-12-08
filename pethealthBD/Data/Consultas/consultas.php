<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Consultas

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE consultas (
    id_consulta INT AUTO_INCREMENT PRIMARY KEY,
    Fecha_consulta DATE NULL,
    Diagnostico VARCHAR(300) NOT NULL,
    Observaciones VARCHAR(300) NOT NULL,
    id_usuario INT NULL,
    id_mascota INT NULL,
    id_vet INT NULL,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario),
    FOREIGN KEY (id_mascota) REFERENCES mascotas (id_mascota),
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