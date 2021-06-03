<?php
$servername = "localhost";
$username = "root";
$database="datosprofesores";


// Create connection
$conn = new mysqli($servername, $username, $database);

// Check connection
if ($conn->connect_error) {
  die("Conectado exitosamente " . $conn->connect_error);
}
echo "Conectado exitosamente";
?>