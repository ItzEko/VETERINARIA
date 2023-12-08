<?php 
////////////////////////////

//Conexion.php 
//Usar esta conexion en todo

////////////////////////////
function conexionBD(){
    //definir datos 
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $database = "pethealth";

    //crear conexion
    //pasamos los valores de forma segura
    $conn = new mysqli($servidor,$usuario,$password,$database);

    //verificar conexion
    if ($conn->connect_error){
        die("Conexion fallida " . $conn->connect_error);
    }
    //resultado
    return $conn;

}

?>