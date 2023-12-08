<?php
require_once '../pethealthBD/conexion/conexion.php';
$conexion = conexionBD();
$sql = "SELECT * FROM usuarios";
$resu = mysqli_query($conexion, $sql);
?>


<table>
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>telefono</th>
            <th>Localidad</th>
            <th>Correo</th>
            <th>Colonia</th>
            <th>CP</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <!-- Filas y celdas -->
        <?php
        while ($ver = mysqli_fetch_row($resu)) :
        ?>

        <tr>
            <td><?php echo $ver[0]; ?></td>
            <td><?php echo $ver[1]; ?></td>
            <td><?php echo $ver[2]; ?></td>
            <td><?php echo $ver[3]; ?></td>
            <td><?php echo $ver[4]; ?></td>
            <td><?php echo $ver[5]; ?></td>
            <td><?php echo $ver[6]; ?></td>
            <td><?php echo $ver[7]; ?></td>
            <td><button class="green" type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#editarCliente">
                    <i class="bi bi-pencil-square"></i>
                </button></td>
            <td><button class="red" type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#Eliminar">
                    <i class="bi bi-trash"></i></button> </td>
        </tr>
        <?php endwhile; ?>
        <!-- Repite las filas según sea necesario -->
    </tbody>
</table>