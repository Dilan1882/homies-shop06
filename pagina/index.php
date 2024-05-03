<?php
$servername = "localhost";
$username = "tu_usuario_mysql";
$password = "tu_contraseña_mysql";
$dbname = "tu_basedatos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario HTML
$nombre = $_POST['nombre'];
$contraseña = $_POST['contraseña'];

// Query SQL para insertar usuario
$sql = "INSERT INTO usuarios (nombre, contraseña) VALUES ('$nombre', '$contraseña')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
