<?php
include "modelo/conexion.php";

if (!empty($_POST["Btnactualizar"])) {
    if (!empty($_POST["id"]) &&
        !empty($_POST["nombre"]) &&
        !empty($_POST["apellido"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["tipo_rol"]) &&
        !empty($_POST["correo"]) &&
        !empty($_POST["telefono"]) &&
        !empty($_POST["id_rol"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $password = $_POST["password"];
        $tipo_Rol = $_POST["tipo_rol"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $idRol = $_POST["id_rol"];

        $sql = "UPDATE Usuarios SET Nombre='$nombre', Apellido='$apellido', Password='$password', Tipo_Rol='$tipo_Rol', Correo='$correo', Telefono='$telefono', Id_Rol='$idRol' WHERE Id_Usuario=$id";

        if ($conexion->query($sql) === TRUE) {
            header("Location: index.php?alert=success");
            exit;
        } else {
            echo '<div class="alert alert-danger">Error: ' . $conexion->error . '</div>';
        }

        $conexion->close();
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}


