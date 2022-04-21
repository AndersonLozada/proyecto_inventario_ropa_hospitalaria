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
<div class="row">
<aside>
<?php include_once('menu.html'); ?>
</aside>
<div class="div_form">
<section>
<h1>Inactivar Usuario</h1>
<form action="#" role="form" method="POST" >   

<div>
  <input id="usuario"  type="number" class="usuario" required placeholder="Usuario" > 
  <button type="submit" name="submit" class="btn_consulta">consultar</button>
</div>

<tr><td colspan="2">
      <button type="submit"  name="submit" >Inactivar </span></button>     
      </td></tr>
    </form>  
</section>
</div>
</div>
    </body>
</html>