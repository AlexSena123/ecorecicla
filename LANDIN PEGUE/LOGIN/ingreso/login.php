<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>

</head>
<body>
<header>
        <div class="navbar">
            <a class="logo" href="INICIO.PHP">
                <img src="../IMAGENES/descarga.png" width="120px" height="120px" alt="logo de la compañia" > 
           </a>

           <ul class="links">
               <li><a href="INICIO.HTML" class="nav-link">INICIO</a></li>
               <li><a href="QUIENES SOMOS.HTML" class="nav-link">QUIENES SOMOS</a></li>
               <li><a href="RUTAS.HTML" class="nav-link">RUTAS DE RECOLECCION</a></li>
               <li><a href="DOCUMENTOS.HTML" class="nav-link">NORMALIDAD Y LEGALIDAD</a></li>
               <li><a href="../TIENDA SOCIAL/index.HTML" class="nav-link">TIENDA SOCIAL</a></li>
               <li><a href="BUZON.HTML" class="nav-link">CONTACTANOS</a></li>
               <li><a href="PQRS.HTML" class="nav-link">PQRS</a></li>
               <li><a href="../loginprueba2/login.php" class="nav-link login-btn">INGRESAR</a></li>
           </ul>

            <div class="toggle_btn">
                <i class="fas fa-bars" style="color: #2d3543;"></i>
            </div>
        </div>
        <div class="dropdown_menu">
            <li><a href="INICIO.HTML" class="nav-link">INICIO</a></li>
            <li><a href="QUIENES SOMOS.HTML" class="nav-link">QUIENES SOMOS</a></li>
            <li><a href="RUTAS.HTML" class="nav-link">RUTAS DE RECOLECCION</a></li>
            <li><a href="DOCUMENTOS.HTML" class="nav-link">NORMALIDAD Y LEGALIDAD</a></li>
            <li><a href="../TIENDA SOCIAL/index.PHP" class="nav-link">TIENDA SOCIAL</a></li>
            <li><a href="BUZON.HTML" class="nav-link">CONTACTANOS</a></li>
            <li><a href="PQRS.HTML" class="nav-link">PQRS</a></li>
            <li><a href="../loginprueba2/login.php" class="nav-link login-btn">INGRESAR</a></li>
        </div>
    </header>
    <script src="../java/BOTON RESPONSIVE.js"></script>

<!--LOGIN-->
<section class="LOGASO">
    <div class="login-box">
        <h2>BIENVENIDO</h2>
        <form action="login_process.php" method="POST">
            <div class="user-box">
                <input type="text" name="correoElectronico" required>
                <label for="correoElectronico">Correo electrónico</label>
            </div>
            <div class="user-box">
                <input type="password" name="contrasena"  required>
                <label for="contrasena">Contraseña</label>
            </div>
            <div class="user-box">
                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <input type="submit" value="Iniciar sesión">
                </a>
            </div>
        </form>
        <?php
        session_start();
if (isset($_SESSION['error'])) {
    echo '<div class="error-message">' . $_SESSION['error'] . '</div>';
    unset($_SESSION['error']); // Limpiar la variable de sesión
}
?>
    </div>

</section>


</body>
</html>
