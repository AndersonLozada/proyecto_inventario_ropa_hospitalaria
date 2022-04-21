<?php
session_start();
require("conexion.php");
require("login.php");
?>

<html lang="es">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="estilos.css" media="all" type="text/css">
<link rel='icon' type="image/png"href="images/icono.png">
<title> Inicio</title>
</head>
<body>
<h1 class="h1_index">Bienvenido</h1>		
	<h4> Iniciar sesión</h4>
	<form action="" method="POST" class="form_index">	
	<div>
			<label for="user"><b>Usuario</b></label>
	</div>
	<div>
			<input type="text" placeholder="ingrese su usuario" id="user" name="form_user" >
</div>				
	<div>
			<label for="password"><b>Constraseña</b></label>
</div>			
	<div>	
			<input type="password" placeholder="ingrese su contraseña" id="password" name="form_password" >	
</div>
<div>		
			<button type="submit"> Ingresar</button>
		</div>
	</form>
<?php
//mensaje de alerta
//en caso de error mostrar mensaje
if(isset($error_message)){

	echo "<div class= 'error_message'>".$error_message. '</div>';
}
?>
</body>
</html>