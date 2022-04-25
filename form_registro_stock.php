<?php
session_start();
require("conexion.php");
require("login.php");
?>
<html lang="es">
<head>

  <title>Stock Ropa</title>
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
<h1 >Estándar Ropa Hospitalaria</h1>
<form  action="../inventario/insert_stock.php" role="form" method="POST" >   

<div>
  <select  name="origen"  required> 
                     <option selected="true" disabled="disabled">Seleccione la Unidad</option>    
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
                    <option>PRUEBA_NO_USAR</option>                   
</select>	               
</div>
<div>
    <select name="prenda" required>  
                    <option selected="true" disabled="disabled">Seleccione la Prenda</option>
                    <option>Almohadas</option>
                    <option>Camilleras</option>
                    <option>Cobertor Incubadora Doble faz</option>
                    <option>Cobertor Neonatos</option>
                    <option>Cobijas Paciente</option>
                    <option>Cobijas Estar Medico</option>
                    <option>Fundas estar medico</option>
                    <option>Fundas Almohada</option>
                    <option>Forro de Media Luna</option>
                    <option>Protector o Forro Nido</option>
                    <option>Sabanas Paciente o de Cama</option>
                    <option>Sabanas 01</option>
                    <option>Sabanas Fajas</option>
                    <option>Sabanas estar Medico</option>
                    <option>Sabanas Neonatal o Pediatrica</option>
                    <option>Sabanas Neonatal con Resorte</option>
                    <option>Batas Paciente</option>
                    <option>Bata Renal</option>
                    <option>Bata aislamiento covid blanca</option>
                    <option>Batas de Aislamiento</option>
                    <option>Bata Pediatricas o Neonatal</option>
                    <option>Camisa Uniforme</option>
                    <option>Pantalon Uniforme</option>
                    <option>Envolvederas de Equipo</option>
                    <option>Cobertor de TAC</option>
                    <option>Escafandras</option>
                    <option>Rollos cambio de posicion</option>
                    <option>Tulas de medicamentos</option>
                    <option>protectores cubre baranda cuna</option>
                    <option>pantalon blanco uniforme</option>
                    <option>forro almohada</option>
                    <option>forro de rollo para cambio de posicion</option>
                    <option>Toldillos</option>
                    <option>Bolsa Material Esteril</option>
                    <option>Cauchos azul para cirugia</option>
                    <option>Cortinas</option>
                    <option>Sabanas Renal</option>
                    <option>Camisa Uniforme_blanco</option>
                    <option>pantalones blanco estudiantes</option>
                    <option>pantalones estudiantes</option>
                    <option>camisa blanca uniforme</option>
                    <option>Polainas</option>
                    <option>Petos</option>
                    <option>Tulas de ropa azul</option>
                    <option>overol covid</option>
                    <option>Cojin camilla</option>
                    <option>camisa blanca estudiante</option>                    
                    <option>rollo en u</option>
                    <option>caucho blanco</option>
                    <option>Camisa estudiante</option>
                    <option>Tula de ropa sucia</option>
</select>
</div>    
<div>   
  <input name="cantidad" required  type="number" placeholder="Cantidad"> 
</div>
      <button type="submit"  name="submit" >Guardar </button>  
      <button type="reset" >Limpiar </button> 
      
    </form>  
</section>
</div>
    </body>
</html>