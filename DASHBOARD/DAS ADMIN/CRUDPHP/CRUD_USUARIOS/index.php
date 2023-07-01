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
			<li><a href="../../index.PHP" class="active"><i class='bx bxs-dashboard icon' ></i> INICIO</a></li>
			<li class="divider" data-text="main">Main</li>
			<li>
				<a href="#"><i class='bx bx-user icon' ></i> Usuarios <i class='bx bx-chevron-right icon-right' ></i></a>
				<ul class="side-dropdown">
					<li><a href="#">Registrar</a></li>
					<li><a href="index.php">Consultar Usuarios</a></li>
					<li><a href="../CRUD_CLIENTE/tabla.php">consultar Cliente</a></li>
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
    <script>
      function eliminar(){
        var respuesta=confirm("estas seguro de eliminar este dato?");
        return respuesta
      }
       //FONCION DE LOS BOTONES OCULTAR Y MOSTARR 
      /* function mostrarFormulario() {
            var formulario = document.getElementById('formulario');
            formulario.style.display = 'block';
        }

        function ocultarFormulario() {
            var formulario = document.getElementById('formulario');
            formulario.style.display = 'none';
        }*/
     </script>



    <h1 class ="text-center p-3"> consulta de datos</h1>


    <!-- tabla de registro-->
   <!-- <div class="container-floid row">
    <form class="col-4 p-3" method="POST" >
        <h3 class="text-center">Registro</h3>
        <?php
        include "modelo/conexion.php";
        include "controlador/registrar.php";
        include "controlador/eliminardatos.php";
        ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOMBRE DE LA PERSONA </label>
    <input type="tex" class="form-control" name ="nombre" >
  </div>
  <div class="mb-3" >
  <label for="exampleInputEmail1" class="form-label">Correo </label>
    <input type="email" class="form-control" name="Correo" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero de telefono</label>
    <input type="tex" class="form-control" name ="telefono" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Numero de documento </label>
    <input type="tex" class="form-control" name ="documento" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Direccion </label>
    <input type="tex" class="form-control" name ="direccion" >
  </div>
  
  <button type="submit" class="btn btn-primary" name="Btnregistro" value="ok">Registrar</button>



  //botones de ocultar tabla y mostrar
  <button type="button" class="btn btn-primary" onclick="mostrarFormulario()">Mostrar Formulario</button>
        <button type="button" class="btn btn-primary" onclick="ocultarFormulario()">Ocultar Formulario</button>
</form>-->




<!--tabla de datos -->
<?php

// Verificar si se proporcionó un parámetro de alerta en la URL
if (isset($_GET['alert'])) {
    $alert = $_GET['alert'];

    // Mostrar la alerta correspondiente según el valor del parámetro
    if ($alert == 'success') {
        echo '<div class="alert alert-success">Datos actualizados correctamente</div>';
    } elseif ($alert == 'error') {
        echo '<div class="alert alert-danger">Error al registrar</div>';
    }
    if ($alert == 'delete') {
      echo '<div class="alert alert-danger">Datos eliminados correctamente</div>';
  }
}

include "modelo/conexion.php";
$sql = $conexion->query("SELECT * FROM Usuarios");
?>

<div class="button-right">
  <a href="fregistrar.php" class="button">Registrar</a>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">APELLIDO</th>
                <th scope="col">Password</th>
                <th scope="col">Tipo rol</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Id_Rol</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($datos = $sql->fetch_object()) {
                ?>
                <tr>
                    <td><?= $datos->Id_Usuario ?></td>
                    <td><?= $datos->Nombre ?></td>
                    <td><?= $datos->Apellido ?></td>
                    <td><?= $datos->Password ?></td>
                    <td><?= $datos->Tipo_Rol ?></td>
                    <td><?= $datos->Correo ?></td>
                    <td><?= $datos->Telefono ?></td>
                    <td><?= $datos->Id_Rol ?></td>
                    <td>
                    <a href="editor.php?id=<?=$datos->Id_Usuario?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square" style="color: #1b222c;"></i></a>                     
                    <a onclick="return eliminar()" href="index.php?id=<?=$datos->Id_Usuario?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash" style="color: #2d3543;"></i></a>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
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