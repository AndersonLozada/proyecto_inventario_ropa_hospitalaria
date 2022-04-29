<?php
session_start();
require("conexion.php");
require("login.php");
?>
<html lang="es">
<head>

  <title>Usuarios</title>
  <meta charset="utf-8">   
  <link rel="stylesheet" href="estilos.css" media="all" type="text/css"> 
  <link rel='icon' type="image/png"href="images/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<aside>
<?php include_once('menu.php'); ?>
</aside>
<div class="row">
<section>
<h1>Cambiar contraseña</h1>
<form action="../proyecto_inventario_ropa_hospitalaria/update_pass.php" role="form" method="POST"> 

<div>
  <input id="usuario"  type="text" name="usuario" required placeholder="Usuario"> 
</div>

<div>
  <input id="contrasena" name="pass" type="text" required placeholder="Contraseña"> 
</div>
<div>
  <input id="confirm" name="confirm" type="text" required placeholder="Confirmar contraseña"> 
</div>
<tr><td colspan="2">
      <button type="submit"  name="submit" >Actualizar </span></button>  
      <button type="reset" >Limpiar </button>       
      </td></tr>
    </form>  
</section>
</div>
</body>
</html>