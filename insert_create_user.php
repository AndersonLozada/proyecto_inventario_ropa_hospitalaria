<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.68/proyecto_inventario_ropa_hospitalaria/form_create_users.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");
	   //recuperar las variables	   
	   $nombre=$_POST['nombre'];
	   $apellido=$_POST['apellido'];
	   $cedula=$_POST['cedula'];
       $contrasena=$_POST['contrasena'];
	   $hashedpass=password_hash($contrasena, PASSWORD_DEFAULT);
       $categoria=$_POST['categoria'];
       $sucursal=$_POST['sucursal'];     
	   
	   $sql= mysqli_query($conn,"SELECT * FROM usuarios WHERE cedula='$cedula'");
	   $filas = mysqli_num_rows($sql);
	   if($filas >0){
?>
		<script type="text/javascript">
	swal('El usuario ya existe','','error');        
	</script>
	
<?php
	mysqli_close($conn);
	   }
	   else{
	   
	   $sql2 = "INSERT INTO usuarios(nombre, apellido, cedula, usuario, contrasena, categoria, sucursal, estado)
                VALUES ('$nombre', '$apellido',$cedula, '$cedula', '$hashedpass', '$categoria', '$sucursal', 1 )";

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
		}		
			
?>
</body>
</html>