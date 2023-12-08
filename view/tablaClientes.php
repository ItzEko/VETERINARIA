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
            <th colspan="3">Acciones</th>
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
                <td style="text-align:center" colspan="2">
                    <span class="btn btn-warning" onclick="obtenerDatos('<?php echo $ver[0]; ?>')" data-bs-toggle="modal" data-bs-target="#editarCliente"> Editar </span>
                </td>
                <td>
                    <span class="btn btn-danger" onclick="eliminar('<?php echo $ver[0]; ?>')"> Eliminar </span>

                </td>
            </tr>
        <?php endwhile; ?>
        <!-- Repite las filas según sea necesario -->
    </tbody>
</table>