<?php 
include "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Veterinario

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE veterinario (
    id_vet INT AUTO_INCREMENT PRIMARY KEY,
    Nombre TEXT NOT NULL,
    Apellido TEXT NOT NULL,
    Cedula VARCHAR(100) NOT NULL,
    Telefono VARCHAR(10) NOT NULL,
    Localidad TEXT NOT NULL,
    Correo VARCHAR(200) NOT NULL,
    Calle TEXT NULL,
    Colonia TEXT NULL,
    Cp TEXT NOT NULL
)";

//$sql = "ALTER TABLE veterinario
//ADD COLUMN Contraseña VARCHAR(255) NOT NULL;
//";

$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>