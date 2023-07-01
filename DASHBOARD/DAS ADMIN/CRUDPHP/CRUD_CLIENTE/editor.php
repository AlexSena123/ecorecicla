<?php
include "conexion/conexion.php";
$id = $_GET["id"];
$sqlUsuarios = $conexion->query("SELECT * FROM usuarios WHERE Id_Usuario = $id");
$sqlCliente = $conexion->query("SELECT * FROM cliente WHERE Id_Cliente = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos_tabla_regis.css">
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center">Actualización de datos</h3> <br>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">

        <?php
    
        // ...
        
        // Verificar si existe el parámetro de alerta en la URL
        if (isset($_GET["alert"])) {
            $alerta = $_GET["alert"];
            
            // Mostrar la alerta correspondiente según el valor del parámetro
            if ($alerta == "actualizado") {
                echo '<div class="alert alert-success">Datos actualizados</div>';
            }
        }
        
        // ...
    
        include "controlador/modificaciondedatos.php";
        while ($datosUsuarios = $sqlUsuarios->fetch_object()) {
        ?>
            <!-- Agrega los campos necesarios para actualizar los datos del usuario -->
            <div class="mb-3">
                <label for="nombre" class="form-label" >Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?= $datosUsuarios->Nombre ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" class="form-control" name="apellido" value="<?= $datosUsuarios->Apellido ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" class="form-control" name="correo" value="<?= $datosUsuarios->Correo ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" value="<?= $datosUsuarios->Telefono ?>" required><br>
            </div>

        <?php
        }
        ?>

        <?php
        while ($datosCliente = $sqlCliente->fetch_object()) {
        ?>
            <!-- Agrega los campos necesarios para actualizar los datos del cliente -->
            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección Domicilio:</label>
                <input type="text" class="form-control" name="Dirección_Domicilio_Usuario" value="<?= $datosCliente->Dirección_Domicilio_Usuario ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Kg Entregados:</label>
                <input type="text" class="form-control" name="Kg_Entregados" value="<?= $datosCliente->Kg_Entregados ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Puntos Acumulados:</label>
                <input type="text" class="form-control" name="Puntos_Acumulados" value="<?= $datosCliente->Puntos_Acumulados ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Fecha de Nacimiento:</label>
                <input type="text" class="form-control" name="Fecha_Nacimiento" value="<?= $datosCliente->Fecha_Nacimiento ?>" required><br>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Documento del Cliente:</label>
                <input type="text" class="form-control" name="Documento_Cliente" value="<?= $datosCliente->Documento_Cliente ?>" required><br>
            </div>
        <?php
        }
        ?>

        <!-- Agrega los demás campos de actualización aquí -->

        <br>
        <button type="submit" class="btn btn-primary" name="Btnactualizar" value="ok">ACTUALIZAR DATOS</button>
    </form>
</body>
</html>