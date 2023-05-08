<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/output.css" />
    <link rel="shortcut icon" href="./img/minimal-blue.png" />
	<title>Muchas Gracias - Minimal</title>
</head>
<body class="bg-azul flex justify-center items-center">
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];

$destino="mail@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Localidad: ".$localidad." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "<div class='flex flex-col items-center gap-spacerS text-crema text-center'>
	<h1 class='text-fontL font-bold'>Gracias por contactarse!</h1>
	<p class='text-fontS'>En los proximos días recibirás una respuesta via mail</p>
	<a href='./index.html' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[180px] text-center'>Regresar</a>
</div>";
}else{
	echo "<div class='flex flex-col items-center gap-spacerS text-crema text-center'>
	<h1 class='text-fontL font-bold'>¡Ocurrió un error!</h1>
	<a href='./index.html' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[180px] text-center'>Regresar</a>
</div>";
}

$conexion = mysqli_connect("localhost","root","", "pd3") or die('No se pudo conectar al servidor');
$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,localidad,comentario)VALUES ( '$nombre','$email','$localidad','$comentario')") or die(mysqli_error($conexion));
?>

<?php if($enviado == true){ ?>

<?php } ?>

</body>
</html>