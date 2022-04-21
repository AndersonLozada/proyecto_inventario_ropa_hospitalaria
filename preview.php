<?php
  require('conexion.php');  
  $origen=$_POST['origen'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <title>Preview</title>
  <meta charset="utf-8">   
  <link rel="stylesheet" href="estilos.css" media="all" type="text/css"> 
  <link rel='icon' type="image/png"href="images/icono.png">

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function eliminar() {
      var resultado = window.confirm('Estas seguro que desea eliminar?');
          if (resultado == true) {
            var id =prompt("confirme el id: ");
            var origen =prompt("confirme si es salida o entrada: S (salida)  E (entrada) "); 
            
        } else { 
             window.alert('error');
        }
       
        };
 </script> 

</head>
<body>
    
<table>
<?php

$acum=1;
if($origen=="ESTANDAR" or $origen=="INVENTARIO"){
  $sql = "SELECT * FROM $origen";
  $rsResult = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  if(mysqli_num_rows($rsResult)>0)
  {
  ?><!--llamamos las columnas por sus nombres<<<  -->
    
    
      <h3 >Sucursal: Neiva</h3>
      <h3 >Todo <?php echo $origen ?></h3>
  <?php
      $i = 0;
      while ($i < mysqli_num_fields($rsResult)){
         $field = mysqli_fetch_field_direct($rsResult, $i);
         $fieldName=$field->name;
  ?>
          <td id="th"><?php echo "$fieldName" ?></td>
  <?php
         $i = $i + 1;
      }
  ?>
      <!--Field names retrieved<<<  
      We dump info  -->
  <?php
      $bolWhite=true;
      while ($row = mysqli_fetch_assoc($rsResult)){
        echo $bolWhite ? "<tr>" : "<tr>";
          $bolWhite=!$bolWhite;        
          foreach($row as $data) {        
    ?>
          <td id="td"> 
    <?php    
              echo "$data";
          }
    ?>
          </td>
    <?php      
          echo "</tr>";
      }
  ?>
  <?php }} else {?> 
  
<?php
if($origen =="ENTRADAS" or $origen =="SALIDAS"){
  ?>  
    <h3 >Sucursal: Neiva</h3>

    <h3 ><?php echo $origen ?></h3>
    <tr>        
        <th id="th"> ID </th>
        <th id="th">Unidad </th>
        <th id="th"> Prenda </th>
        <th id="th"> Cantidad </th>
        <th id="th"> Fecha de entrada </th>   
        <th id="th"> Fecha de registro </th>           
    </tr>   
<?php
$sql = mysqli_query($conn,"SELECT * FROM entradas ORDER BY fecha DESC");
while ($fila = mysqli_fetch_array($sql)){  
?>
<div class="row">
<div class="col l10 offset-l1">
</div></div>
<tr>
    <td id="td"><?php echo $acum++ ?></td>    
    <td id="td"><?php echo $fila[1] ?></td>
    <td id="td"><?php echo $fila[2] ?></td>
    <td id="td"><?php echo $fila[3] ?></td> 
    <td id="td"><?php echo $fila[4] ?></td>
    <td id="td"><?php echo $fila[5] ?></td>
    <td><input type="button" value="inactivar" id="eliminar" onclick="eliminar()"></td>
    
   </tr>
<?php }} else { 
  ?>

<?php

if($origen!="STOCK" and $origen !="ENTRADAS" and $origen != "SALIDAS" and $origen != "INVENTARIO"){
  ?>  
    <h3 >Sucursal: Neiva</h3>
    <h3 >Unidad: <?php echo $origen ?></h3>
    <tr>
        <th id="th"> ID </th>
        <th id="th">Descripcion </th>
        <th id="th"> Estándar </th>
        <th id="th"> Conteo </th>
        <th id="th"> Entradas </th>
        <th id="th"> Salidas </th>
        <th id="th"> Faltante </th>             
    </tr>   
<?php
$sql = mysqli_query($conn,"SELECT * FROM $origen");
while ($fila = mysqli_fetch_array($sql)){  
?>
<div class="row">
<div class="col l10 offset-l1">
</div></div>
<tr>
    <td id="td"><?php echo $acum++ ?></td>
    <td id="td"><?php echo $fila[0] ?></td>
    <td id="td"><?php echo $fila[1] ?></td>
    <td id="td"><?php echo $fila[2] ?></td>
    <td id="td"><?php echo $fila[3] ?></td> 
    <td id="td"><?php echo $fila[4] ?></td>
    <td id="td"><?php echo $fila[5] ?></td>   
   </tr>

<?php }}}}?>
<tr>
</table>
  <td color:#ffffff>
<button type="submit" name="back" value="back" onclick= "location='form_excel.php'">Regresar</button>
</td>
</tr>
<br><br>
</div></div>
</body>
<html>
