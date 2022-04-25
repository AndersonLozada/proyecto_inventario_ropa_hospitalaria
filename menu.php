<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Menù Lateral con Css</title>
	<link rel="stylesheet" href="menu_style.css">
</head>

<body>
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
	
			<nav class="menu">
										
				<a href="#">Soporte</a>
				<a href="./end_sesion.php">Cerrar Sesion</a>
			</nav>
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">	
	<div class="cont-menu">
			<ul class="lista">
			<li><a href="./form_entrada.php">Entradas</a></li>
			<li><a href="./form_salida.php">Salidas</a></li>
			<li><a href="./form_registro_stock.php">Estandar</a></li>
			<li><a href="./form_registro_inventario.php">Inventario</a></li>
			<li><a href="./form_excel.php">Reportes</a></li>
			<li><a href="#">Gestion de usuarios</a>
			<ul>
			<li><a href="./form_create_users.php">Crear</a></li>
			<li><a href="./form_modify_users.php">modificar</a></li>
			<li><a href="./form_update_pass.php">Cambiar contraseña</a></li>
			<li><a href="./form_cambiar_estado_usuario.php">Activar/ Inactivar Usuario</a></li>
			<li><a href="./form_inactivar_grupo.php">Activar/ Inactivar Grupo</a></li>
			</ul>
			</li>
			</ul>

		<label for="btn-menu">✖️</label>
	</div>
</div>
</body>
</html>