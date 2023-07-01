<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilosb.css">
    <script src="https://kit.fontawesome.com/4a78390d64.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../../ESTILO/style.css">
    
    <link rel="stylesheet" href="estilos/boton.css">
	<script>
    function confirmarSalida() {
      if (confirm("¿Estás seguro de que deseas salir?")) {
        window.location.href = "../../LANDIN PEGUE/CODE HTML/INICIO.HTML";
      }
    }
  </script>
	<title>Recibosa</title>
</head>
<body>
    <i class=''></i>
	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand"><i class='bx bx-recycle icon'></i> RECIBOSA</a>
		<ul class="side-menu">
			<li><a href="#" class="active"><i class='bx bxs-dashboard icon' ></i> INICIO</a></li>
			<li class="divider" data-text="main">Main</li>
			<li>
				<a href="#"><i class='bx bx-user icon' ></i> Usuarios <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="fregistrar.php" class="button">Registrar</a></li>
					<li><a href="index.php">Consultar Usuarios</a></li>
					<li><a href="../CRUD_CLIENTE/tabla.php">CONSULTAR CLIENTE</a></li>
				</ul>
			</li>
			<li><a href="#"><i class='bx bx-question-mark icon' ></i> PQRS</a></li>
			<li><a href="#"><i class='bx bx-store icon' ></i> Tienda Social</a></li>
			<li><a href="#"><i class='bx bxs-truck icon' ></i> Rutas</a></li>
			<li>
				<a href="#"><i class='bx bx-user-circle icon' ></i> Perfil <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Puntos</a></li>
					<li><a href="#">Historial de compras</a></li>
				</ul>
			</li>
		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="#" class="btn-upgrade">Upgrade</a>
				<p>Become a <span>PRO</span> member and enjoy <span>All Features</span></p>
			</div>
		</div>
	</section>
	<!-- SIDEBAR -->

	<!-- NAVBAR -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Perfil</a></li>
					<li><a href="../../../../LANDIN PEGUE/CODE HTML/INICIO.HTML" onclick="confirmarSalida()"><i class="bx bxs-log-out-circle"></i> Salir</a></li>
				</ul>
			</div>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
<!-- tabla de registro-->
<div class="container">
    <div class="row center-form">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center">Registro</h3>
            <br>
            <?php
            include "modelo/conexion.php";
            include "controlador/registrar.php";
            include "controlador/eliminardatos.php";
            ?>
<div class="mb-3">
       <label for="nombre" class="form-label" >Nombre:</label>
       <input type="text"   class="form-control" name="nombre" required><br>
    </div>
   
    <div class="mb-3">
       <label for="apellido">Apellido:</label>
       <input type="text" class="form-control" name="apellido" required><br>
    </div>

    <div class="mb-3">
       <label for="password">Contraseña:</label>
       <input type="password" class="form-control" name="password" required><br>
    </div>

    <div class="mb-3">
       <label for="tipo_rol">Tipo de Rol:</label>
       <input type="text" class="form-control" name="tipo_rol" required><br>
    </div>

    <div class="mb-3">
       <label for="correo">Correo:</label>
       <input type="email" class="form-control" name="correo" required><br>
    </div>

    <div class="mb-3">
       <label for="telefono">Teléfono:</label>
       <input type="tel" class="form-control" name="telefono" required><br>
    </div>

    <div class="mb-3">
       <label for="id_rol">ID de Rol:</label>
       <input type="text" class="form-control" name="id_rol" required><br>
    </div>

            <button type="submit" class="btn btn-primary" name="Btnregistro" value="ok">Registrar</button>

        </form>
        <div class="button-wrapper">
  <a href="index.php" class="button">regresar</a>
</div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
		</main>
		<!-- MAIN -->
	</section>
	<!-- NAVBAR -->

	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../../JS/script.js"></script>
</body>
</html>