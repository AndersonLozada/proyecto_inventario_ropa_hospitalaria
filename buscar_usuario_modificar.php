<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="estilos.css" media="all" type="text/css"> 
<link rel='icon' type="image/png"href="images/icono.png"> 
<title>Modificar usuario</title>
</head>
<body>
<aside>
<?php include_once('menu.html'); ?>
</aside>
<?php
require("conexion.php");

//recuperar las variables	   
$usuario=$_POST['usuario'];
?>
<section class="section_update_user">
<h1>Modificar usuario</h1>
<form action="">
<table>
<?php
/*
$acum=1;
  $sql1 = "SELECT * FROM usuarios where usuario='$usuario'  ";
  $rsResult = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
  if(mysqli_num_rows($rsResult)>0)
  {
      $i = 1;
      while ($i < mysqli_num_fields($rsResult)){
         $field = mysqli_fetch_field_direct($rsResult, $i);
         $fieldName=$field->name;
?>       <tr>   
         <th><?php echo "$fieldName" ?></th><br>
      </tr>
         <?php 
         $i = $i + 1;
       }
       
    }
*/
?>

<?php       


         while ($row = mysqli_fetch_assoc($rsResult)){     
             foreach($row as $data) {

  ?>
        <tr>  
 <th><input type="text" value=<?php echo $data ?>></input></th>

    </tr>
  <?php
      }
     
  }          
?>

    <br><button type="submit"  name="submit" >Actualizar </button> 
</form>
</section>
    </body>
    </html>