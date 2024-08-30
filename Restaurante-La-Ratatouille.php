<!DOCTYPE html>

<head>
  <title> Restaurante La Ratatouille </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" type="text/css" href="css/estilos3.css" /> <!-- Estilo del Slider-->
  <link rel="stylesheet" type="text/css" href="css/estilos2.css" /> <!-- Estilo menu y colores-->
  <link rel="stylesheet" type="text/css" href="fonts.css" />
  <link rel="stylesheet" type="text/css" href="css/styles.css"/> <!-- Estilo Menus Hamburguer-->
  <link rel="stylesheet" type="text/css" href="css/accordion.css"/> <!-- Estilo Accordion-->

  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/header.js"></script>
  <script src="js/script.js"></script>
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

  <section class="contenido wrapper">
    <br>

    <p>&nbsp;</p>
  </section>
  <h1 class="wrapper">Top 10 Platillos de la Semana ***** </h1>

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
      <img src="img/p10.jpg">
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="js/jquery.slides.js"></script>
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
  <br>
  <h1 class="wrapper">
    <center> Nuestros Restaurantes </center>
  </h1>


  <br><!--Inicia Accordion Desplegable-->
  <center>
    <button style="width: 55%;" class="accordion">
      <center> San José </center>
    </button>
    <div style="width: 55%;" class="panel">
      <br>
      <a>Visita Nuestro Restaurante en <a
          href="http://localhost/Proyectos-IIIGEN1/ProyectoFinal-IIIGEN1/paginas/Restaurantes.php">San José </a></a> .
      </p>
    </div>
  </center>

  <center>
    <button style="width: 55%;" class="accordion">
      <center> Guanacaste </center>
    </button>
    <div style="width: 55%;" class="panel">
      <br>
      <a>Visita Nuestro Restaurante en <a
          href="http://localhost/Proyectos-IIIGEN1/ProyectoFinal-IIIGEN1/paginas/Restaurantes.php">Guanacaste </a></a> .
      </p>
    </div>
  </center>

  <center>
    <button style="width: 55%;" class="accordion">
      <center> Heredia </center>
    </button>
    <div style="width: 55%;" class="panel">
      <br>
      <a>Visita Nuestro Restaurante en <a
          href="http://localhost/Proyectos-IIIGEN1/ProyectoFinal-IIIGEN1/paginas/Restaurantes.php">Heredia </a></a> .
      </p>
    </div>
  </center>

  <center>
    <button style="width: 55%;" class="accordion">
      <center> Puntarenas </center>
    </button>
    <div style="width: 55%;" class="panel">
      <br>
      <a>Visita Nuestro Restaurante en <a
          href="http://localhost/Proyectos-IIIGEN1/ProyectoFinal-IIIGEN1/paginas/Restaurantes.php">Puntarenas </a></a> .
      </p>
    </div>
  </center>

  <script>
    var acc = document.getElementsByClassName("accordion");
    for (var i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
  </script>
  <!-- Finaliza Accordion Desplegable-->

  <br>
  <br>

  <p class="wrapper">&nbsp;</p>
  <br>
  <h1 class="wrapper">
    <center>Especialidades</center>
  </h1> <br>
  <br>

  <!--Inician los Cards-->
  <style>
    .card img,
    .card-content h2,
    .card-content a {
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover img,
    .card:hover h2,
    .card:hover a {
      transform: scale(1.05);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .card-content {
      background-color: rgba(255, 255, 255, 0);/* Fondo completamente transparente */
      text-align: center;/* Centrar el texto */
    }

    .card-content h2 {
      color: #000000;
      font-weight: 300;
    }
  </style>
  </head>

  <body>
    <div style="display: flex; justify-content: center; gap: 20px;">
      <div>
        <div class="card">
          <img src="img/lugar.jpg" width="500px" height="250px">
          <div class="card-content">
            <br>
            <h2>Puntarenas, Especialidad en Mariscos</h2>
            <br>
          </div>
        </div>

        <div class="card">
          <img src="img/r1.jpg" width="500px" height="250px">
          <div class="card-content">
            <br>
            <h2>Heredia, Especialidad en Pastas</h2>
            <br>
          </div>
        </div>
      </div>

      <div>
        <div class="card">
          <img src="img/r2.jpg" width="500px" height="250px">
          <div class="card-content">
            <br>
            <h2>Guanacaste, Especialidad en Carnes</h2>
            <br>
          </div>
        </div>

        <div class="card">
          <img src="img/r3.jpg" width="500px" height="250px">
          <div class="card-content">
            <br>
            <h2>San José, Especialidad en Sushi</h2>
            <br>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
    <!--Finalizan los Cards-->


    <br>
    <p class="wrapper">&nbsp;</p>
    <br>
    <p class="wrapper">&nbsp;</p>

    <br>

    <footer>
      <br>
      <br>
      <center>
        Búscanos en las Redes Sociales
        <br>
        <br>
        Facebook
        <a href="https://www.facebook.com/">
          <img src="img/Facebook1.png" alt="Facebook">
          <span class="icon-facebook2"></span>
        </a>
        Whatsapp
        <a href="https://web.whatsapp.com/">
          <img src="img/Whatsapp.png" alt="Whatsapp">
          <span class="icon-Whatsapp"></span>
        </a>
        </div>
        <br>
        <br>
        <span class="icon-home"></span> Derechos Reservados por Jossymar Molina Rodriguez --UCEM-- 2024
        <br>
        <br>
        <br>
      </center>
    </footer>
  </body>
  </html>