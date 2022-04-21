<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="3;url=http://172.19.15.181/prueba/form_excel.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
//llamamos el archivo de conexion
  require('conexion.php');	   
	   //obtenemos el dato de la variable
	   $origen=$_POST['origen'];

//ejecutamos la creacion de la tabla
$sql= "CREATE VIEW $origen AS SELECT estandar.prenda as descripcion, estandar.$origen as estandar,
inventario.$origen as inventario, sum_entradas.$origen as entradas, sum_salidas.$origen as salidas,  estandar.$origen - inventario.$origen - sum_entradas.$origen + sum_salidas.$origen  as Faltante
FROM inventario 
INNER JOIN estandar ON inventario.prenda = estandar.prenda 
INNER JOIN sum_entradas on inventario.prenda = sum_entradas.prenda
INNER JOIN sum_salidas on inventario.prenda = sum_salidas.prenda
 WHERE estandar.$origen>0 or inventario.$origen>0 or sum_entradas.$origen>0 or sum_salidas.$origen>0";

					
	
if (mysqli_query($conn, $sql)) {
	?>		
				<script type="text/javascript">
				swal('Tabla creada correctamente','','success');        
				</script>
	<?php		
			}
			else {
?>	
				<script type="text/javascript">
				swal('La tabla ya existe','','error');        
				</script>
<?php	
			}	
			mysqli_close($conn);
	?>
	</body>
	</html>