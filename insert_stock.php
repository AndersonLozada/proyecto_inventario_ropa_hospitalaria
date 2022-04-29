<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="3;url=http://172.19.15.68/proyecto_inventario_ropa_hospitalaria/form_registro_stock.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");

	   //recuperar las variables	   
	   $prenda=$_POST['prenda'];
	   $origen=$_POST['origen'];
	   $constante=$_POST['constante'];	
	   $promedio=$_POST['promedio'];
	   
	   $sql = "UPDATE constante_stock_nva, stock_nva	   			
	   			SET constante_stock_nva.$origen = $constante, stock_nva.$origen = $promedio
			    WHERE stock_nva.$prenda =constante_stock_nva.$prenda";
	
	   if (mysqli_query($conn, $sql)) {
?>
		<script type="text/javascript">
		swal('Datos guardados correctamente','','success');        
		</script>
<?php
	   }
	   else {
?>
			<script type="text/javascript">
			swal('Error al guardar','','error');        
			</script>
<?php		
			}

?>
		
</body>
</html>