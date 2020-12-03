

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php  
   include("act1.php");

   if (isset($_POST["boton"])) {
      
      $nombre =   $_POST["nombre"];
      $apellido= $_POST["apellido"];
      $email = $_POST["email"];
      $edad = $_POST["edad"];

      $insert = "insert into alumnos(nombre, apellido, email, edad) values('".$nombre."','".$apellido."','".$email."',".$edad.")";

      mysqli_query($conexion, $insert);
      echo "Datos enviados correctamente";


   }

?>
	<div class="container">
   		<div class="row">
   			<!-- Offseting Sample -->
   			<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 bg-cust1">
   				<br>
   				<h2 class="text-center">Formulario</h2>

   				<form method="post" enctype="multipart/form-data">
   					<div class="form-group">
   						<label for="f1_1" class="sr-only">Nombre:</label>
   						<input id="f1_1" type="text" class="form-control" placeholder="nombre" name="nombre">
   					</div>
   					<div class="form-group">
   						<label for="f1_2" class="sr-only">Apellido:</label>
   						<input id="f1_2" type="text" class="form-control" placeholder="Apellido"  name="apellido">
   					</div>
   					<div class="form-group">
   						<label for="f1_3" class="sr-only">Email:</label>
   						<input id="f1_3" type="text" class="form-control" placeholder="Email"  name="email">
   					</div>
   					<div class="form-group">
   						<label for="f1_4" class="sr-only">Edad:</label>
   						<input id="f1_4" type="number" class="form-control" placeholder="Edad"  name="edad">
   					</div>

   					<div class="clearfix"></div>

   					<button type="submit" class="btn btn-default pull-right" id="submit" name="boton">Enviar</button>
   					<div class="clearfix"></div>

   					<br>
   				</form>
   			</div>
   		</div>
   	</div>


   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>