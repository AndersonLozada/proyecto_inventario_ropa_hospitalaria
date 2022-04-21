
<?php
$user = $_POST['form_user'];
$pass = $_POST['form_password'];
//archivo con las consultas para ingreso al panel

// valida si se ingreso usuario y contraseña para consultar en tabla de base de datos
if(isset($user) && isset($pass)){

//quitar espacios en blanco y validar que no esten vacios
if(!empty(trim($user)) && !empty(trim($pass))){



    //realizo la consulta para ver si existe el usuario ingresado
    $query = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario='$user'");

    //si la consulta tiene valores, existe el usuario, procedo a consultar el estado del usuario
    if(mysqli_num_rows($query) >0){
        $row = mysqli_fetch_assoc($query);        
        $status = $row['estado']; 
        if($status==2){
            $error_message = "usuario inactivo.";
        } else{      //asigno el valor de la clave ingresada en formulario para mejor vista
        $password = $row['contrasena'];      
        $id = $row['id'];          
        //verifico que la clave ingresada sea igual a la almacenada en la tabla de la base de datos
        //si la verificacion es cierta
        if($password == $pass){

            //actualizo el id de sesion actual con uno generado mas reciente
            session_regenerate_id(true);

            //coloco usuario en una variable de sesion para poder acceder a otras paginas
            session_start();
            $_SESSION['user'] = $user;
            
            //direcciono al panel de administracion o pagina de logueo exitoso.
            header('location: inicio.html');
            exit;            
    }
    else{
        //mensaje de error
        $error_message = "usuario o contraseña incorrectos.";

    }
}
    }
else{
    //si usuario no existe mostrar error
    $error_message = "usuario o contraseña incorrectos.";

}
} else{
    //en caso que no haya completado los campos del formulario
    $error_message = "por favor ingrese los datos solicitados.";
}
}
?>