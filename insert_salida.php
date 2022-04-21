<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.181/prueba/form_salida.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");

	   //recuperar las variables	   
	   $prenda=$_POST['prenda'];
	   $origen=$_POST['origen'];
	   $cantidad=$_POST['cantidad'];
       $fecha=$_POST['fecha'];	
	   
	   $sql2 = "INSERT INTO salidas(unidad, prenda, cantidad, fecha_salida,fecha_registro)
                VALUES ('$origen', '$prenda', $cantidad, '$fecha',NOW())";
	
		if (mysqli_query($conn, $sql2)) {
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
		$sql = "UPDATE sum_salidas SET $origen= $origen+$cantidad WHERE prenda='$prenda'";	

		if (mysqli_query($conn,$sql)) {
			echo " ";
		}
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		

		mysqli_close($conn);
?>

	</body>
	</html>