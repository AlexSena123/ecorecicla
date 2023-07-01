<?php
include "conexion/conexion.php";

if (!empty($_POST["Btnactualizar"])) {
    if (!empty($_POST["id"]) &&
        !empty($_POST["nombre"]) &&
        !empty($_POST["apellido"]) &&
        !empty($_POST["correo"]) &&
        !empty($_POST["telefono"]) &&
        !empty($_POST["Dirección_Domicilio_Usuario"]) &&
        !empty($_POST["Kg_Entregados"]) &&
        !empty($_POST["Puntos_Acumulados"]) &&
        !empty($_POST["Fecha_Nacimiento"]) &&
        !empty($_POST["Documento_Cliente"])) {

        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $Direccion_Domicilio_Usuario = $_POST["Dirección_Domicilio_Usuario"];
        $Kg_Entregados = $_POST["Kg_Entregados"];
        $Puntos_Acumulados = $_POST["Puntos_Acumulados"];
        $Fecha_Nacimiento = $_POST["Fecha_Nacimiento"];
        $Documento_Cliente = $_POST["Documento_Cliente"];

        $sql = "UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Correo='$correo', Telefono='$telefono' WHERE Id_Usuario=$id";

        if ($conexion->query($sql) === TRUE) {
            $sql = "UPDATE cliente SET Dirección_Domicilio_Usuario='$Direccion_Domicilio_Usuario', Kg_Entregados='$Kg_Entregados', Puntos_Acumulados='$Puntos_Acumulados', Fecha_Nacimiento='$Fecha_Nacimiento', Documento_Cliente='$Documento_Cliente' WHERE Id_Cliente=$id";

            if ($conexion->query($sql) === TRUE) {
                // Redirigir al usuario a tabla.php con una alerta de "Datos actualizados"
                header("Location: tabla.php?alert=actualizado");
                exit;
            } else {
                echo '<div class="alert alert-danger">Error: ' . $conexion->error . '</div>';
            }
        } else {
            echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
        }
    }
}
?>
