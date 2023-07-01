<!DOCTYPE html>
<html>
<head>
    <title>Registro de cliente</title>
</head>
<body>
    <h2>Registro de cliente</h2>
    <form action="registro_process.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br><br>

        <label for="correoElectronico">Correo electrónico:</label>
        <input type="text" name="correoElectronico" required><br><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br><br>

        <!-- Otros campos de registro -->

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>
