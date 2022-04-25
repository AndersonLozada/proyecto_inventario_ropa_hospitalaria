<?php
session_start();
require("conexion.php");
require("login.php");
?>
<html lang="es">
<head>

  <title>Grupos</title>
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
<h1>Inactivar Grupo</h1>
<form action="#" role="form" method="POST" >   

<div>
<div>
     <input list="categoria" name="categoria"  type="text" required placeholder="Grupo">      
</div>
                  <datalist id="categoria">      
                    <option>Administrador</option>
                    <option>General</option>
                    <option>Inventario</option>
                  </datalist>
  
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