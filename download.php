<?php
  require('conexion.php');  
  
  $origen=$_POST['origen'];

  //generar archivo excel
header("content-type: application/xls");
header("Content-disposition: attachment; filename= $origen.xls");

?>
<table>
<?php

$acum=1;
if($origen=="STOCK" or $origen=="INVENTARIO"){
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
        <th id="th"> Fecha </th>             
    </tr>   
<?php
$sql = mysqli_query($conn,"SELECT * FROM $origen ORDER BY fecha DESC");
while ($fila = mysqli_fetch_array($sql)){  
?><div class="row">
<div class="col l10 offset-l1">
</div></div>
<tr>
    <td id="td"><?php echo $acum++ ?></td>    
    <td id="td"><?php echo $fila[1] ?></td>
    <td id="td"><?php echo $fila[2] ?></td>
    <td id="td"><?php echo $fila[3] ?></td> 
    <td id="td"><?php echo $fila[4] ?></td>
    <td><input type="button" value="eliminar" id="eliminar" onclick="eliminar()"></td>
    
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
        <th id="th"> Inventario </th>
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
<br><br>