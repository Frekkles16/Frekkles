<?php 
	$server = "localhost";
	$user = "root";
	$passwd = "";
	$bbdd = "DAW";

	$conexion = mysqli_connect($server, $user, $passwd, $bbdd) or die("No se ha conectado");

	print_r($conexion);

	
?>