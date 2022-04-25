<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.180/inventario/form_cambiar_estado_usuario.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");
	   //recuperar las variables	   

       $usuario=$_POST['usuario']; 
       $estado=$_POST['estado'];
       if($estado=="Activar"){
        $sql2 = "UPDATE usuarios SET estado=1 WHERE usuario='$usuario'";
       }  
       else{   
       $sql2 = "UPDATE usuarios SET estado=2 WHERE usuario='$usuario'";
       }
				if (mysqli_query($conn,$sql2)) {
?>
				<script type="text/javascript">
			swal('Estado actualizado correctamente','','success');        
			</script>
<?php
				}
				else {
	?>
					<script type="text/javascript">
					swal('Error verifique el usuario','','error');        
					</script>
	<?php
			}		
			
?>
</body>
</html>