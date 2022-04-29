<!DOCTYPE html>
<html>
<head>
<!-- <meta http-equiv="refresh" content="2;url=http://192.168.10.26:81/pages/form_registro.php"> -->
<meta http-equiv="refresh" content="2;url=http://172.19.15.68/proyecto_inventario_ropa_hospitalaria/form_cambiar_estado_grupo.php">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require("conexion.php");
	   //recuperar las variables	   

       $grupo=$_POST['grupo']; 
       $estado=$_POST['estado'];
       if($estado=="Activar"){
           
        $sql2 = "UPDATE usuarios SET estado=1 WHERE categoria='$grupo'";

       }  
       else{   
       $sql2 = "UPDATE usuarios SET estado=2 WHERE categoria='$grupo'";
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
					swal('Algo salió mal','','error');        
					</script>
	<?php
			}	
            if($estado=="Activar"){
            $sql = "UPDATE grupos SET estado=1, observaciones='Activo' WHERE grupo='$grupo'";

        }  
        else{   
        $sql = "UPDATE grupos SET estado=2, observaciones='Inactivo' WHERE grupo='$grupo'";
        }
                 if (mysqli_query($conn,$sql)) {
 ?>
                 <script type="text/javascript">
             swal('Estado actualizado correctamente','','success');        
             </script>
 <?php
                 }
                 else {
     ?>
                     <script type="text/javascript">
                     swal('Algo salió mal','','error');        
                     </script>
     <?php
             }
?>
</body>
</html>