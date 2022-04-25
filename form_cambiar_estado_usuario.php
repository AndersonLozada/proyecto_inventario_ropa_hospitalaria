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
<?php include_once('menu.php'); ?>
</aside>
<div class="div_form">
<section>
<h1>Cambiar estado de  Usuario</h1>
<form action="../inventario/cambiar_estado_usuario.php" role="form" method="POST">   

<div>
  <input id="usuario"  type="text" class="usuario" required placeholder="Usuario" name="usuario" > 
</div>
<div>
  <select  name="estado"  required> 
                     <option selected="true" disabled="disabled">seleccione el estado</option>    
                    <option>Activar</option>
                    <option>Inactivar</option>
</select>
</div>
<tr><td colspan="2">
      <button type="submit"  name="submit" >Actualizar </span></button>     
      </td></tr>
    </form>  
</section>
</div>
</div>
    </body>
</html>