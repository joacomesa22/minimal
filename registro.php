<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registro - Minimal</title>
</head>
<body>
	<?php
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$email = $_POST['email'];
		$usuario = $_POST['usuario'];
		$password = md5($_POST['password']);


		include("conexion.php");	

		// $_SESSION['nombre'] = $nombre

		$consulta = mysqli_query($conexion, "INSERT INTO usuarios (usuario, clave, nombre, apellido, email) VALUES('$usuario','$password','$nombre', '$apellido', '$email')");

		header("Location:pages/login.html");

	?>	
</body>
</html>