<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="3;url=http://172.19.15.68/proyecto_inventario_ropa_hospitalaria/form_update_pass.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");


	   //recuperar las variables	   
	   $usuario=$_POST['usuario'];
	   $pass=$_POST['pass'];
	   $confirm=$_POST['confirm'];
	   

	   if($pass !==$confirm){
?>
		<script type="text/javascript">
							swal('Las contraseñas no coinciden','','error');        
						</script>
<?php
	   }
	   else{
		$hashedpass=password_hash($pass, PASSWORD_DEFAULT);
	   $sql2 = "UPDATE usuarios SET contrasena='$hashedpass' WHERE usuario=$usuario";
	
	   if (mysqli_query($conn, $sql2)) {
?>
					<script type="text/javascript">
					swal('Contraseña actualizada correctamente','','success');        
					</script>
<?php
						}
						else {
?>
							<script type="text/javascript">
							  swal('Error al actualizar','','error');        
						  </script>
  <?php							
						}		 	
			 mysqli_close($conn);
					}
?>		
</body>
</html>