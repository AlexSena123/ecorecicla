<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM Usuarios WHERE Id_Usuario = $id";
    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php?alert=delete");
        exit;
    } else {
        echo '<div class="alert alert-danger">Error al eliminar: ' . $conexion->error . '</div>';
    }

    $conexion->close();
}
?>