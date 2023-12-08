<?php
session_start();

// Configuración de la base de datos
include '../pethealthBD/conexion/conexion.php';

$conn = conexionBD();

// Función para validar las credenciales
function validarCredenciales($username, $password) {
    global $conn;

    // Evitar inyección SQL usando consultas preparadas
    $stmt = $conn->prepare("SELECT * FROM veterinario WHERE correo  = ? AND contraseña = ?");
    $stmt->bind_param("ss", $username, $password);

    // Ejecutar la consulta
    $stmt->execute();

    // Obtener el resultado
    $result = $stmt->get_result();

    // Verificar si se encontraron filas
    if ($result->num_rows > 0) {
        return true; // Credenciales válidas
    } else {
        return false; // Credenciales inválidas
    }
}

// Procesar el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["correo"];
    $password = $_POST["contra"];

    if (validarCredenciales($username, $password)) {
        // Credenciales válidas, redirigir a la página principal o realizar otras acciones
        header("Location: ../index.php?inicio=1");
        exit();
    } else {
        // Credenciales inválidas, redirigir al formulario de inicio de sesión con un mensaje de error
        header("Location:../login.php?error=1");
        
        exit();
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
