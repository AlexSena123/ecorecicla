<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql = $conexion->query(" select * from Usuarios where Id_Usuario =$id");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos_tabla_regis.css">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST" >
        <h3 class="text-center">Actualizacion de datos</h3> <br>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
       <?php
       
       include "controlador/modificaciondedatos.php";
       while ($datos=$sql->fetch_object()) {?>

<div class="mb-3">
       <label for="nombre" class="form-label" >Nombre:</label>
       <input type="text"   class="form-control" name="nombre"  value=<?=$datos->Nombre?> required><br>
    </div>
   
    <div class="mb-3">
       <label for="apellido">Apellido:</label>
       <input type="text" class="form-control" name="apellido" value=<?=$datos->Apellido?> required><br>
    </div>

    <div class="mb-3">
       <label for="password">Contraseña:</label>
       <input type="password" class="form-control" name="password" value=<?=$datos->Password?> required><br>
    </div>

    <div class="mb-3">
       <label for="tipo_rol">Tipo de Rol:</label>
       <input type="text" class="form-control" name="tipo_rol" value=<?=$datos->Tipo_Rol?>  required><br>
    </div>

    <div class="mb-3">
       <label for="correo">Correo:</label>
       <input type="email" class="form-control" name="correo" value=<?=$datos->Correo?>  required><br>
    </div>

    <div class="mb-3">
       <label for="telefono">Teléfono:</label>
       <input type="tel" class="form-control" name="telefono" value=<?=$datos->Telefono?> required><br>
    </div>

    <div class="mb-3">
       <label for="id_rol">ID de Rol:</label>
       <input type="text" class="form-control" name="id_rol" value=<?=$datos->Id_Rol?> required><br>
    </div>
  <br>
  <button type="submit" class="btn btn-primary" name="Btnactualizar" value="ok">ACTUALIZAR DATOS</button>
</form>
       
<?php }
   ?>
        <div class="button-wrapper">
  <a href="index.php" class="button">regresar</a>
</div>
 
</body>
</html>