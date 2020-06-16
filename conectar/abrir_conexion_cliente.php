<?php



//conexion de base de datos a mysql//
    $conn = mysqli_connect("localhost", "root", "", "reality2_postalmarketing");

    if(!$conn){
    echo"Error en la conexion con el servidor";
}
?>