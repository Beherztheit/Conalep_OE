<?php 
	//Conectar a la base de datos
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname = "examenesco";

	$conn = new mysqli($hostname, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}else{
		echo "conexion establecida";
	}
?>