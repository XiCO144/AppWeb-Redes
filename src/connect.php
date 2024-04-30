<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "frutaria_db";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn->connect_error) {
        Echo "Erro a conectar";
    }
?>