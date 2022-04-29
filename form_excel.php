<?php
session_start();
require("conexion.php");
require("login.php");
?>

<html lang="es">
<head>

  <title>Visualizar/Descargar/Crear</title>
  <meta charset="utf-8">   
  <link rel="stylesheet" href="estilos.css" media="all" type="text/css"> 
  <link rel='icon' type="image/png"href="images/icono.png">
</head>

<body>
<aside>
<?php include_once('menu.php'); ?>
</aside>
<div class="row">
<section>
<H1>Visualizar,Descargar o Crear Reporte</H1>
<!-- en este caso el form no lleva action ya que usamos varios botones que nos enviaran al proceso solicitado de cada uno de ellos -->
<form   role="form" method="POST" >

<div>
  <select  name="origen"  required> 
                     <option selected="true" disabled="disabled">Seleccione la Unidad</option>  
                  <datalist id="origen">      
                    <option>CIRUGIA_1_PISO</option>
                    <option>HEMODINAMIA</option>
                    <option>RESONANCIA</option>
                    <option>RAYOS_X</option>
                    <option>URGENCIAS_ADULTO</option>
                    <option>HOSPITALIZACION_GOLD</option>
                    <option>UCI_ADULTO</option>
                    <option>UCI_INTERMEDIA</option>
                    <option>CARDIOLOGIA_NO_INVASIVA</option>
                    <option>UCI_QUIRURGICA</option>
                    <option>HOSPITALIZACION_RUBI</option>
                    <option>SALA_TRANSICIONAL</option>
                    <option>HOSPITALIZACION_VIP</option>
                    <option>HOSPITALIZACION_PREMIUM</option>
                    <option>HOSPITALIZACION_3_PISO</option>
                    <option>HOSPITALIZACION_ZAFIRO</option>
                    <option>URGENCIAS_PEDIATRICA</option>
                    <option>TAC</option>
                    <option>ECOGRAFIA</option>
                    <option>UCI_PEDIATRICA</option>
                    <option>LACTARIO</option>
                    <option>UCI_4_PISO</option>
                    <option>HOSPITALIZACION_PEDIATRICA</option>
                    <option>UCI_CARDIOVASCULAR</option>
                    <option>HOSPITALIZACION_5_PISO</option>
                    <option>CIRUGIA_6_PISO</option>
                    <option>ESTERILIZACION</option>
                    <option>UNIDAD_RENAL</option>
                    <option>CUARTO_ROPA_LIMPIA_SOTANO</option>
                    <option>URGENCIAS_ADULTO_AL</option>
                    <option>RAYOS_X__AL</option>
                    <option>TAC__AL</option>
                    <option>ECOGRAFIA__AL</option>
                    <option>CIRUGIA__AL</option>
                    <option>UNIDAD_MATERNA__AL</option>
                    <option>UCI_NEONATAL__AL</option>
                    <option>UCI_ADULTO__JERSALUD_AL</option>
                    <option>HOSPITALIZACION_3_PISO__AL</option>
                    <option>LACTARIO__AL</option>
                    <option>HOSPITALIZACION_4_PISO__AL</option>
                    <option>HOSPITALIZACION_5_PISO__AL</option>
                    <option>UCI_ADULTO_5_PISO__AL</option>
                    <option>HOSPITALIZACION_6_PISO__AL</option>
                    <option>CUARTO_ROPA_LIMPIA_SOTANO__AL</option>
                    <option>SEDE_ALTICO</option>
                    <option>HOSPICASA</option>
                    <option>VACUNACION</option>
                    <option>LA_TOMA</option>
                    <option>ELECTROENCEFALOGRAFIA</option>
                    <option>PLANTA_LAVANDERIA</option>
                    <OPTION>SIN_MARCAR</OPTION>
                    <option>UAI_PEDIATRICA</option>  
                    <option>ESTANDAR</option>   
                    <option>INVENTARIO</option>
                    <option>ENTRADAS</option>
                    <option>SALIDAS</option>                                 
</select>	
</div>               
</td>
<tr><td colspan="2">
<button type="submit"  name="descargar" value="descargar" onclick= "this.form.action='download.php'"> Descargar</button>
<button type="submit"  name="preview" value="Vista Previa" onclick= "this.form.action='preview.php'">Visualizar</button>
<button type="submit"  name="create" value="create" onclick= "this.form.action='create.php'">Crear</button>
</td></tr>
</form> 
</section>
</div>
</body>
</html>
