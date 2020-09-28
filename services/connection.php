<?php

//ESTILOS POR PROCEDIMIENTOS
$host = "localhost";
$user = "root";
$pass = "";
$db = "rereaddb";

//CREAR LA CONEXIÓN
$conn = mysqli_connect($host, $user, $pass, $db);

//CHECKEAR LA CONEXIÓN
if(!$conn) {
    echo "Error: No se pudo conectar a la bd." . PHP_EOL;
    echo "Error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
} else {
    mysqli_set_charset($conn, "utf8");
}

/*
//ESTILOS ORIENTADOS A OBJETOS
// CREAR LA CONEXIÓN
$conn = new mysqli('localhost', 'root', '', 'rereaddb');

//CHECKEAR LA CONEXIÓN
if($conn->connect_errno) {
    die("Error: No se pudo conectar a MySQL: " . $conn->connect_errno);
} else {
    $conn->set_charset("utf8");
}
*/