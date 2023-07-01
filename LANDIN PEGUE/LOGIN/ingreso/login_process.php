<?php
session_start();

// Establecer la conexión con la base de datos
require_once("../conexion/conexion.php");

// Verificar si la conexión se realizó correctamente
if ($conexion === null) {
    die("Error de conexión: No se pudo establecer la conexión a la base de datos");
}

// Obtener los datos del formulario de login
$correoElectronico = $_POST['correoElectronico'];
$contrasena = $_POST['contrasena'];

// Consultar la base de datos para verificar las credenciales del usuario
$query = "SELECT * FROM USUARIOS WHERE Correo='$correoElectronico' AND Password='$contrasena'";
$result = $conexion->query($query);

if ($result !== false && $result->num_rows == 1) {
    // Usuario autenticado correctamente
    $_SESSION['correoElectronico'] = $correoElectronico;
    header("Location: home.php"); // Redireccionar a la página de inicio
} else {
     // Error de autenticación
     $_SESSION['error'] = "Usuario o contraseña incorrectos";
     header("Location: login.php"); // Redireccionar al inicio del login
}

$conexion->close();

?>

