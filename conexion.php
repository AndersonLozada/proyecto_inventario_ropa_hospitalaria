<?php
       //datos para conectamos Con el servidor        
	   	$servername = "localhost";
		$username = "root";
		$password = "12345678";
		$dbname = "prueba_inventario";

// Crear la conexion
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check a conexion

if (!$conn) {

	die("conection failed: " . mysqli_connect_error());
}

?>