<?php
// Configuración para MAMP: usuario root, contraseña root
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "control_acceso";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$procedencia = $_POST['procedencia'];
$area_visita = $_POST['area_visita'];
$persona_visita = $_POST['persona_visita'];
$asunto = $_POST['asunto'];
$identificacion = $_POST['identificacion'];
$hora_entrada = $_POST['hora_entrada'];
$hora_salida = $_POST['hora_salida'];

// Insertar en la tabla tutores
$sql = "INSERT INTO tutores (nombre, procedencia, area_visita, persona_visita, asunto, identificacion, hora_entrada, hora_salida)
VALUES ('$nombre', '$procedencia', '$area_visita', '$persona_visita', '$asunto', '$identificacion', '$hora_entrada', '$hora_salida')";

if ($conn->query($sql) === TRUE) {
  echo "Registro guardado correctamente.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>