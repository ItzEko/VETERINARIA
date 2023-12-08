<?php
require_once '../pethealthBD/conexion/conexion.php';

$conexion= conexionBD();

$iduser=$_POST['id'];

$sql="SELECT * FROM usuarios WHERE id_usuario= $iduser";

$result = mysqli_query($conexion,$sql);

$ver= mysqli_fetch_row($result);

$datos=array(
    'id_usuario'=>$ver[0],
    'Nombre'=>$ver[1],
    'Apellido'=>$ver[2],
    'Telefono'=>$ver[3],
    'Localidad'=>$ver[4],
    'Correo'=>$ver[5],
    'Colonia'=>$ver[6],
    'Cp'=>$ver[7]);

    echo json_encode($datos);


?>