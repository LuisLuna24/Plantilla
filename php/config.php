<?php

$conn = new mysqli("localhost", "root", "", "plantilla");

/* Comprobando si hay un error de conexión. */
if ($conn->connect_error) {
    die('Error de conexion ' . $conn->connect_error);
}
?>