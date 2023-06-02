<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/output.css" />
    <link rel="shortcut icon" href="../img/minimal-blue.png" />
	<title>Panel - Minimal</title>
</head>
<body>
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

  <main class="navbar-h bg-azul h-screen flex justify-center items-center px-spacerL">
    <?php
      if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
        
      echo"<div class='text-crema flex items-center gap-spacerM'>
              <div class='flex flex-col items-start gap-spacerS'>
                <div>
                  <p class='text-fontM font-bold'>Bienvenido,</p>
                  <h1 class='text-fontL font-bold'>".$_SESSION['nombre']." ".$_SESSION['apellido']."!</h1>
                </div>
                <p class='text-fontS max-w-[600px]'>Esperamos que estes disfrutando de nustro sitio y hayas aprendido sobre el Minimalismo!</p>
                <a href='../salir.php' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[10px] text-center'>Cerrar Sesión</a>
              </div>
              <div class='flex flex-col gap-spacerS'>
                <p class='text-fontS font-bold text-center'>Te dejamos tus recomendaciones diarias!</p>
                <div class='flex gap-spacerS'>
                  <div class='flex flex-col items-center justify-between p-spacerS border-2 gap-2 bg-crema rounded-xl max-w-[500px] text-azul'>
                  <img
                  src='../img/silla.jpeg'
                  alt='silla'
                  class='rounded-xl border-2 border-azul'
                  />
                  <div class='flex flex-col justify-start h-full'>
                  <h3 class='font-bold text-fontM'>Vivir con menos</h3>
                  <p>
                  Las diferentes ventajas que tiene el estilo de vida minimalista y qué se necesita para poder vivir así de forma efectiva.
                  </p>
                  </div>
                  <a
                  class='bg-azul text-crema font-bold hover:text-azul hover:bg-crema px-[1rem] py-[0.2rem] border-4 border-azul hover:border-azul transition-all duration-300 rounded text-center w-full'
                  href='https://www.bbc.com/mundo/noticias/2014/03/140313_economia_vivir_con_menos_jgc'
                  target='_blank'
                  >
                  Seguir Leyendo
                  </a>
                  </div>


                  <div class='flex flex-col items-center justify-between p-spacerS border-2 gap-2 bg-crema rounded-xl max-w-[500px] text-azul'>
                  <img
                  src='../img/calido.jpeg'
                  alt='silla'
                  class='rounded-xl border-2 border-azul'
                  />
                  <div class='flex flex-col justify-start h-full'>
                  <h3 class='font-bold text-fontM'>Minimalismo cálido</h3>
                  <p>
                  Una tendencia decorativa que viene tomando mucha fuerza en este 2023 y que llegó para quedarse.
                  </p>
                  </div>
                  <a
                  class='bg-azul text-crema font-bold hover:text-azul hover:bg-crema px-[1rem] py-[0.2rem] border-4 border-azul hover:border-azul transition-all duration-300 rounded text-center w-full'
                  href='https://www.lamansiondelasideas.com/decoracion-facil/minimalismo-calido-tendencia-protagonista-2023/'
                  target='_blank'
                  >
                  Seguir Leyendo
                  </a>
                  </div>
                </div>
              </div>
            </div>";
      }else{
        echo "<div class='flex flex-col items-center gap-spacerM text-crema'>
                <div class='flex justify-center'>
                  <img src='../img/exclamation-mark-svgrepo-com.svg'>
                  <img src='../img/exclamation-mark-svgrepo-com.svg'>
                  <img src='../img/exclamation-mark-svgrepo-com.svg'>
                </div>
                <div class='flex flex-col items-center text-center gap-spacerS'>
                  <h2 class='text-fontM font-bold max-w-[500px]'>Para acceder al panel de usuario debes ser un usuario registrado</h2>
                  <a href='./login.html' class='bg-crema text-azul font-bold hover:text-crema hover:bg-azul px-[1rem] py-[0.2rem] border-4 border-crema hover:border-crema transition-all duration-300 rounded w-[180px] text-center'>Iniciar Sesión</a>
                  <p class='text-fontXS'>
                    ¿No tenés cuenta?,
                    <a href='./registro.html'>
                    <span class='font-bold hover:bg-crema hover:text-azul p-1 duration-300'>Registrate!</span>
                    </a>
                  </p>
                </div>
              </div>";
      }
    ?>
  </main>

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