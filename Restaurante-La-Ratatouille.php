<!DOCTYPE html>

<head>
  <title> Restaurante La Ratatouille </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" type="text/css" href="css/estilos3.css" /> <!-- Estilo del Slider-->
  <link rel="stylesheet" type="text/css" href="css/estilos2.css" /> <!-- Estilo menu y colores-->
  <link rel="stylesheet" type="text/css" href="fonts.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css"> <!-- Estilo Menus Hamburguer-->



  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="header.js"></script>
  <script src="arriba.js"></script>
</head>

<body>
  <header>
    <div class="wrapper">
      <div class="logo">

        Restaurante La Ratatouille
        <img style="margin-top: 5px;" src="img/LaRatatouille.png">
      </div>
      <nav>
        <div class="menu-icon" onclick="toggleMenu()">
          &#9776; <!-- Icono de hamburguesa -->
        </div>
        <ul id="menu">
          <li><a href="Restaurante-La-Ratatouille.php">Inicio</a></li>
          <li><a href="paginas/Platillos_y_Postres.php">Platillos y Postres</a></li>
          <li><a href="paginas/Restaurantes.php">Restaurantes</a></li>
        </ul>
      </nav>
    </div>

  </header>
  <span class="ir-arriba icon-arrow-up"></span>
  <section class="contenido wrapper">
    <br>

    <p>&nbsp;</p>
  </section>
  <h1 class="wrapper">Platillos </h1>

  <div class="main">
    <div class="slides">
      <img src="img/p1.jpg">
      <img src="img/p2.jpg">
      <img src="img/p3.jpg">
      <img src="img/p4.jpg">
      <img src="img/p5.jpg">
      <img src="img/p6.jpg">
      <img src="img/p7.jpg">
      <img src="img/p8.jpg">
      <img src="img/p9.jpg">
      <img src="img/p10.jpg" </div>
    </div>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.slides.js"></script>
    <script src="script.js"></script>
    <script>
      $(function () {
        $(".slides").slidesjs({
          play: {
            active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
            effect: "slide",
            // [string] Can be either "slide" or "fade".
            interval: 3000,
            // [number] Time spent on each slide in milliseconds.
            auto: true,
            // [boolean] Start playing the slideshow on load.
            swap: true,
            // [boolean] show/hide stop and play buttons
            pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
            // [number] restart delay on inactive slideshow
          }
        });
      });
    </script>

    <p class="wrapper">&nbsp;</p>
    <br>
    <h1 class="wrapper">Nuestros Restaurantes </h1> <br>
    <br>
    <table border=2 class="wrapper">
      <tr>
        <td><img src="img/lugar.jpg" width="500px" height="250px">
        </td>
        <td><img src="img/r1.jpg" width="500px" height="250px">
        </td>
      </tr>
      <tr>
        <td><img src="img/r2.jpg" width="500px" height="250px">
        </td>
        <td><img src="img/r3.jpg" width="500px" height="250px">
        </td>
      </tr>
    </table>


    <br>
    <p class="wrapper">&nbsp;</p>
    <br>
    <p class="wrapper">&nbsp;</p>

    <br>
    
    <script src="js/script.js"></script>

    <footer>
        <br>
        <br>
        <center> 
            Búscanos en las Redes Sociales
            <br>
            <br>
            <div>
                Facebook 
                <a href="https://www.facebook.com/">
                    <span class="icon-facebook2"></span>
                </a> 
                Whatsapp 
                <a href="https://web.whatsapp.com/">
                    <img src="img/Whatsapp.png" alt="Whatsapp">
                    <span class="icon-Whatsapp"></span>
                </a>
            </div>
            <br>
            <span class="icon-home"></span> Derechos Reservados por Jossymar Molina Rodriguez --UCEM-- 2024
            <br>
            <br>
            <br>
        </center>
    </footer>
</body>
</html>