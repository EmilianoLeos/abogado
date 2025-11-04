<?php
$servername = "db";
$username = "root";
$password = "12345";
$database = "abogado_db";

// crear conexion
$conn = new mysqli($servername, $username, $password, $database);

// verificar conexion
if ($conn->connect_error) {
   die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";
?>