<?php 
	//Conectar a la base de datos
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="examenesco";

	
	mysqli_connect($hostname,$username,$password) or die ("No se ha podido conectar al servidor de Base de datos");
?>