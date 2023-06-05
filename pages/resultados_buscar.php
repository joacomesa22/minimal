<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/output.css" />
    <link rel="shortcut icon" href="../img/minimal-blue.png" />
	<title>Artista - Minimal</title>
</head>
<body class="font-poppins bg-azul">
    <!-- HEADER -->
    <header
      class="flex justify-between p-spacerS bg-azul fixed w-full z-20 border-b-2 border-crema"
    >
      <figure class="max-w-[80px]">
        <a href="../index.html">
          <img
            src="../img/minimal-cream.png"
            alt="logo"
            class="hover:scale-110 duration-300"
          />
        </a>
      </figure>
      <div class="flex items-center gap-spacerS">
        <a href="./panel.php">
          <img
            src="../img/user-regular.svg"
            alt="user"
            class="cursor-pointer hover:scale-110 duration-300"
          />
        </a>
        <img
          src="../img/bars-solid.svg"
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
          href="./historia.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Historia</a
        >
        <a
          href="./artistas.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Artistas</a
        >
        <a
          href="./obras.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Obras</a
        >
        <a
          href="./articulos.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Artículos</a
        >
        <a
          href="./contacto.html"
          class="text-fontL font-bold text-crema hover:bg-crema hover:text-azul duration-300 p-1"
          >Contacto</a
        >
      </nav>
    </div>

	<main class="navbar-h">
		<section class="flex flex-col gap-spacerS px-spacerL py-spacerM">
			<div class="text-crema flex justify-start items-start flex-col gap-2">
          <a href="./artistas.html" class="flex gap-2 hover:scale-110 duration-300">
            <img src="../img/arrow-left-solid.svg" alt="arrow">
            <span class="font-bold">Regresar</span>
          </a>
					<p class="text-fontS font-bold">Su consulta: 
						<?php
							$conexion = mysqli_connect('localhost', 'root', '', 'pd3');
							$buscar = $_POST['buscar'];
							$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
							echo $buscar; // Aparece en HTML
							?>
					</p>
					<p class="text-fontXS">Cantidad de Resultados:
						<?php
							$nros=mysqli_num_rows($consulta);
							echo $nros;
						?>
					</p>

      </div>
				<?php
					while($resultados=mysqli_fetch_array($consulta)) {
				?>
						<div class="text-crema flex flex-col gap-spacerS">
							<h1 class="text-fontL font-bold">
								<?php
									echo $resultados['nombre'] . " " . $resultados['apellido']
									?>
							</h1>
              <div class="flex flex-col gap-spacerM">
                <img src=<?php echo $resultados["foto"] ?>  alt="artista" class="border-2 border-crema max-w-[1000px]">
                <p class="indent-2 max-w-[1000px]"><?php echo $resultados["bio"];?></p>
              </div>
            </div>
					<?php
				}
					mysqli_free_result($consulta);
					mysqli_close($conexion);
				  ?>
		</section>
	</main>
	    <!-- FOOTER -->
		<footer class="p-spacerS flex justify-between items-center bg-crema">
      <figure class="max-w-[80px]">
        <a href="../index.html">
          <img
            src="../img/minimal-blue.png"
            alt="logo"
            class="hover:scale-110 duration-300"
          />
        </a>
      </figure>
      <p class="text-fontXS text-azul">
        Para más información o cualquier duda,
        <a href="./contacto.html">
          <span
            class="font-bold hover:bg-azul hover:text-crema p-1 duration-300"
            >¡Contáctanos!
          </span></a
        >
      </p>
      <div class="flex items-center justify-center gap-spacerS">
        <img
          src="../img/instagram.svg"
          alt="instagram"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
        <img
          src="../img/facebook.svg"
          alt="facebook"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
        <img
          src="../img/twitter.svg"
          alt="twitter"
          class="hover:scale-110 duration-300 cursor-pointer"
        />
      </div>
    </footer>

	<script src="../js/menu.js"></script>
</body>
</html>