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
<section>
<h1>Crear Usuarios</h1>
<form action="#" role="form" method="POST" >   

<div>
  <label for="usuario">Usuario:</label>
</div>
<div>
  <input id="usuario"  type="number" required> 
</div>

<div>
      <label for="cedula">Contraseña:</label><br>
</div>   
<div>   
  <input id="cedula"  type="password" required>
</div>
<div>
      <label for="cedula">Confirmar Contraseña:</label><br>
</div>   
<div>   
  <input id="cedula"  type="password" required>
</div>
<br>
<tr><td colspan="2">
<br>
      <button type="submit"  name="submit" >Crear </span></button>  
      <button type="reset" >Limpiar </button>       
      </td></tr>
    </form>  
</section>
</div>
    </body>
</html>