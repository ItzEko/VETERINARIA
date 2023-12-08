<?php 
require "../../conexion/conexion.php";
//----------------------------------------//

//Base de datos PetHealth
//Tabla Mascotas

//---------------------------------------//

//crear tabla
$sql = "CREATE TABLE mascotas (
    id_mascota INT AUTO_INCREMENT PRIMARY KEY,
    Nombre TEXT NOT NULL,
    Fecha_nacimiento DATE NOT NULL,
    Edad VARCHAR(10) NOT NULL,
    Tamaño FLOAT(10,2) NOT NULL,
    Peso FLOAT(10,2) NOT NULL,
    Color TEXT NOT NULL,
    Sexo TEXT NOT NULL,
    Especie TEXT NOT NULL,
    Raza TEXT NOT NULL,
    Imagen VARCHAR(300) NULL,
    id_usuario INT,
    FOREIGN KEY (id_usuario) REFERENCES usuarios (id_usuario)
)";


$conexion = conexionBD();

if($conexion -> query($sql)==TRUE){
    echo "TABLA MASCOTAS CREADA";
} else{
    echo "Error al crear la tabla: " . $conn->error;
};

$conexion->close();
?>
