<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.181/inventario/form_create_users.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");
	   //recuperar las variables	   
	   $nombre=$_POST['nombre'];
	   $apellido=$_POST['apellido'];
	   $cedula=$_POST['cedula'];
       $usuario=$_POST['usuario'];	   
       $contrasena=$_POST['contrasena'];
	   $hashedpass=password_hash($contrasena, PASSWORD_DEFAULT);
       $categoria=$_POST['categoria'];
       $sucursal=$_POST['sucursal'];      
	   
	   $sql2 = "INSERT INTO usuarios(nombre, apellido, cedula, usuario, contrasena, categoria, sucursal)
                VALUES ('$nombre', '$apellido',$cedula, '$cedula' '$usuario', '$hashedpass', '$categoria', '$sucursal' )";

				if (mysqli_query($conn,$sql2)) {
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