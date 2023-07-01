<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['correoElectronico'])) {
    header("Location: login.php"); // Redireccionar al formulario de login si no ha iniciado sesión
    exit;
}

// Establecer la conexión con la base de datos
require_once("../conexion/conexion.php");

// Obtener el correo electrónico del usuario actual
$correoElectronico = $_SESSION['correoElectronico'];

// Consultar la tabla "USUARIOS" para obtener el ID del usuario actual
$query = "SELECT Id_Usuario FROM USUARIOS WHERE Correo='$correoElectronico'";
$result = $conexion->query($query);

if ($result->num_rows == 1) {
    // Obtener el ID del usuario
    $row = $result->fetch_assoc();
    $userID = $row['Id_Usuario'];

    // Consultar las tablas relacionadas para determinar el tipo de rol del usuario
    $adminQuery = "SELECT * FROM ADMINISTRADOR WHERE Id_Usuario='$userID'";
    $clientQuery = "SELECT * FROM CLIENTE WHERE Id_Usuario='$userID'";
    $employeeQuery = "SELECT * FROM EMPLEADO WHERE Id_Usuario='$userID'";

    $isAdmin = $conexion->query($adminQuery)->num_rows > 0;
    $isClient = $conexion->query($clientQuery)->num_rows > 0;

    // Verificar el tipo de rol y realizar acciones según corresponda
    if ($isAdmin) {
        // Usuario con rol de administrador
        // Realizar acciones específicas para administradores
        header("Location: ../../../DASHBOARD/DAS ADMIN/index.php");
        exit;
    } elseif ($isClient) {
        // Usuario con rol de cliente
        // Realizar acciones específicas para clientes
        echo "Bienvenido, cliente.";
    } else {
        // Usuario con un rol desconocido o sin rol asignado
        echo "Bienvenido, usuario sin rol asignado.";
    }
} else {
    // Usuario no encontrado en la tabla "USUARIOS"
    echo "Error: Usuario no encontrado.";
}

$conexion->close();
?>
