<?php


$conn = mysqli_connect("192.99.46.110", "postalmarketing", "Samsung5#", "reality2_postalmarketing");


//conexion de base de datos a mysql//
    // $conn = mysqli_connect("localhost", "root", "", "reality2_postalmarketing");

    if(!$conn){
    echo"Error en la conexion con el servidor";
}
?>