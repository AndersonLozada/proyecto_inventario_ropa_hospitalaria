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
<?php include_once('menu.html'); ?>
</aside>
<div class="row">
<section>
<h1>Crear Usuarios</h1>
<form action="../inventario/insert_create_user.php" role="form" method="POST" >   

<div>
  <input id="nombre"  type="text" required name="nombre" placeholder="Nombre"> 
</div>
<div>
  <input id="apellido" type="text" required name="apellido" placeholder="Apellido">   
</div>
  
<div>  
  <input id="cedula"  type="number" required name="cedula" placeholder="Cedula">
</div>
<div>   
  <input id="contrasena"  type="password"  name="contrasena" required placeholder="Contraseña">
</div>
<div>
     <select  name="categoria" require> 
                    <option selected="true" disabled="disabled">Seleccione un grupo</option>
                    <option>Administrador</option>
                    <option>General</option>
                    <option>Inventario</option>
</select>
</div>                  
<div>
     <select name="sucursal" require> 
                   <option selected="true" disabled="disabled">Seleccione la sucursal</option>            
                    <option>Neiva</option>
</select>                    
</div>
<tr><td colspan="2">
      <button type="submit"  name="submit" >Crear </span></button>  
      <button type="reset" >Limpiar </button>       
      </td></tr>
    </form>  
</section>
</div>
    </body>
</html>