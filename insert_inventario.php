<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.181/prueba/form_registro_inventario.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");

 //recuperar las variables	   
 $prenda=$_POST['prenda'];
 $origen=$_POST['origen'];
 $cantidad=$_POST['cantidad'];
 
 $sql2 = "UPDATE inventario SET $origen=$cantidad WHERE prenda='$prenda'";
	
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
 	mysqli_close($conn);
?>
</body>
</html>