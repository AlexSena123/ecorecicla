<?php
if (!empty($_POST["Btnregistro"])) {
    if (!empty($_POST["nombre"]) and 
        !empty($_POST["apellido"]) and 
        !empty($_POST["password"]) and 
        !empty($_POST["tipo_rol"]) and 
        !empty($_POST["correo"]) and
        !empty($_POST["telefono"]) and
        !empty($_POST["id_rol"])) {
        
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $password = $_POST["password"];
        $tipo_Rol = $_POST["tipo_rol"];
        $correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $idRol = $_POST["id_rol"];

        $sql = $conexion->query("INSERT INTO usuarios (Nombre, Apellido, Password, Tipo_Rol, Correo, Telefono, Id_Rol) 
        VALUES ('$nombre', '$apellido', '$password', '$tipo_Rol', '$correo', '$telefono', '$idRol')");
        if ($sql == 1) {
            echo '<div class="alert alert-success">Persona registrada correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar</div>';
        }
        
    } else {
        echo '<div class="alert alert-warning">Alguno de los campos está vacío</div>';
    }
}

?>