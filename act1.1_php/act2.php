<?php 
	include("act1.php");


	$mostrar = "select * from Alumnos";
	$resultado = mysqli_query($conexion, $mostrar);

	while ($datos = mysqli_fetch_assoc($resultado)) {
		echo "Codigo: ". $datos["codigo"];
		echo "<br>";
		echo "Nombre: ". $datos["Nombre"];
		echo "<br>";
		echo "Apellido: ". $datos["Apellido"];
		echo "<br>";
		echo "Email: ". $datos["Email"];
		echo "<br>";
		echo "Edad: ". $datos["Edad"];
		echo "<br>";
		echo "<br>";
	}

	mysqli_close($conexion);
	
?>