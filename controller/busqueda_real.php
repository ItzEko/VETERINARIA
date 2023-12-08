<?php
    require_once '../pethealthBD'
    // Recuperar el término de búsqueda desde la solicitud AJAX
    $nombre = $_GET['nombre'];
    
    // Consulta SQL para buscar usuarios por nombre
    $sql = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
    
    // Ejecutar la consulta
    $resultado = $conexion->query($sql);
    
    // Mostrar los resultados
    if ($resultado->num_rows > 0) {
        echo "<h3>Resultados de la búsqueda:</h3>";
        while ($fila = $resultado->fetch_assoc()) {
            echo "<p>{$fila['nombre']} {$fila['apellido']}</p>";
        }
    } else {
        echo "<p>No se encontraron resultados</p>";
    }
    
// Cerrar la conexión
$conexion->close();
