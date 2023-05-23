<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/output.css" />
    <link rel="shortcut icon" href="./img/minimal-blue.png" />
	<title>Bienvenido - Minimal</title>
</head>
<body class="font-poppins">
	    <!-- HEADER -->
		<header
      class="flex justify-between p-spacerS bg-azul fixed w-full z-20 border-b-2 border-crema"
    >
      <figure class="max-w-[80px]">
        <a href="./index.html">
          <img
            src="./img/minimal-cream.png"
            alt="logo"
            class="hover:scale-110 duration-300"
          />
        </a>
      </figure>
      <div class="flex items-center gap-spacerS">
        <a href="./pages/login.html">
          <img
            src="./img/user-regular.svg"
            alt="user"
            class="cursor-pointer hover:scale-110 duration-300"
          />
        </a>
        <img
          src="./img/bars-solid.svg"
          alt="menu"
          class="cursor-pointer hover:scale-110 duration-300"
          id="menu"
        />
      </div>
    </header>

    <!-- NAVEGACIÓn -->
    <div
      class="fixed flex justify-end w-full right-[-100%] duration-500 z-10"
      id="toggle"
    >
      <nav
        class="flex flex-col justify-center p-spacerL text-end bg-azul h-screen border-l-2 border-crema"
      >
        <a
          href="./pages/historia.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Historia</a
        >
        <a
          href="./pages/artistas.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Artistas</a
        >
        <a
          href="./pages/obras.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Obras</a
        >
        <a
          href="./pages/articulos.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Artículos</a
        >
        <a
          href="./pages/contacto.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Contacto</a
        >
      </nav>
    </div>

	<main class="navbar-h bg-crema h-screen flex justify-center items-center">

			<?php
				$usuario=$_POST['usuario'];
				$password=md5($_POST['password']);

				include("conexion.php");

				$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND clave='$password'");

				$resultado=mysqli_num_rows($consulta);

				if($resultado!=0){
					$respuesta=mysqli_fetch_array($consulta);
					
					$_SESSION['nombre']=$respuesta['nombre'];
					$_SESSION['apellido']=$respuesta['apellido'];
					echo"<div class='flex flex-col items-center gap-spacerS text-azul text-center'>
							<h1 class='text-fontL font-bold'>"."Bienvenido ".$_SESSION['nombre']." ".$_SESSION['apellido']."!"."</h1>
							<p class='text-fontS'>Accedé al panel de usuario!</p>
							<a href='./pages/panel.php' class='bg-azul text-crema font-bold hover:text-azul hover:bg-crema px-[1rem] py-[0.2rem] border-4 border-azul hover:border-azul transition-all duration-300 rounded w-[180px] text-center'>Panel</a>
						  </div>";
				}else{	
          echo"<div class='flex flex-col items-center gap-spacerS text-azul text-center'>
							<h1 class='text-fontL font-bold'>No eres un usuario registrado</h1>
							<a href='./pages/panel.php' class='bg-azul text-crema font-bold hover:text-azul hover:bg-crema px-[1rem] py-[0.2rem] border-4 border-azul hover:border-azul transition-all duration-300 rounded w-[180px] text-center'>Registrarse</a>
						  </div>";
				}
			?>

	</main>

	    <!-- FOOTER -->
	<footer class="p-spacerS flex justify-between items-center bg-crema border-t-2 border-azul">
      <figure class="max-w-[80px]">
        <a href="./index.html">
          <img
            src="./img/minimal-blue.png"
            alt="logo"
            class="hover:scale-110 duration-300"
          />
        </a>
      </figure>
      <p class="text-fontXS text-azul">
        Para más información o cualquier duda,
        <a href="./pages/contacto.html">
          <span
            class="font-bold hover:bg-azul hover:text-crema p-1 duration-300"
            >¡Contáctanos!
          </span></a
        >
      </p>
      <div class="flex items-center justify-center gap-spacerS">
        <img
          src="./img/instagram.svg"
          alt="instagram"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
        <img
          src="./img/facebook.svg"
          alt="facebook"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
        <img
          src="./img/twitter.svg"
          alt="twitter"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
      </div>
  </footer>

  <script src="./js/menu.js"></script>
</body>
</html>