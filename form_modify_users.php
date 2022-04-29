<?php
session_start();
require("conexion.php");
require("login.php");
?>
<html lang="es">
<head>

  <title>Modificar usuario</title>
  <meta charset="utf-8">   
  <link rel="stylesheet" href="estilos.css" media="all" type="text/css"> 
  <link rel='icon' type="image/png"href="images/icono.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<div class="row">
<aside>
<?php include_once('menu.php'); ?>
</aside>
<section>
<h1>Modificar Usuario</h1>
<form action="../proyecto_inventario_ropa_hospitalaria/buscar_usuario_modificar.php" role="form" method="POST" >   

<div>
  <input id="usuario"  type="text" required placeholder="ingrese el usuario" name="usuario"> 
</div>
      <button type="submit"  name="submit" >Buscar </span></button>       
      </td></tr>
    </form>  
</section>
</div>
    </body>
</html>