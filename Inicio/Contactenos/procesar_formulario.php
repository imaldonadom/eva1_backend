<?php

include '../conexion.php';

$conexion = new Conexion();

$conn = $conexion->getConnection();

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO clientes (id, nombre, email, mensaje, fecha_registro) VALUES (NULL, '$nombre', '$email', '$mensaje', CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
    echo "Datos ingresados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
