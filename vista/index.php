<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="vista/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vista/css/estiloHome.css">
    <link rel="stylesheet" type="text/css" href="vista/css/font1.css">
    <link rel="stylesheet" type="text/css" href="vista/css/main.css">
    <link rel="icon"  href="IMGPG/LOGOVOGA.ico">

    <title>Home</title>
  </head>
  <body class="Home">

    <!------------------Encabezado ----------------------------->
    <header class=" ENC container-fluid  d-flex justify-content-center">
      <p class="text-light mb-0 p-2 fs-6">Contactanos +52 2481400040</p>
    </header>
    
    <!-- Barra de navegacion -->
    <?php include_once("vista/layouts/navbar.php"); ?>

    <h1></h1>
    <br>
    
    <!-- Carrusel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="vista/IMGPG/Baner4.jpg" class="d-block w-100 imgcrr" alt="Paisaje">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="vista/IMGPG/Baner7.jpg" class="d-block w-100 imgcrr" alt="Villa">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="vista/IMGPG/Baner5.jpg" class="d-block w-100 imgcrr" alt="...">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <br>
    
    <div class="social-bar">
      <a href="https://www.facebook.com/VooghaCs-101452356014700" class="icon icon-facebook2" target="_blank"></a>
      <a href="https://www.instagram.com/vooghacs10/" class="icon icon-instagram" target="_blank"></a>
      <a href="https://twitter.com/GoovhaCs" class="icon icon-twitter" target="_blank"></a>
      <a href="mailto: empr24643@gmail.com" class="icon icon-mail2" target="_blank"></a>
    </div>

    
    <!-- INTRODUCCION DE SERVICIOS-->

    <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto" id="intro">
      <h1 class="p-3 fs-2 border-top border-3">Vive, siente y disfruta. <span class="spin">Voogha CS </span>
        <br> La mejor tienda del estado </h1>
        <p class="p-3  fs-4"> Contamos con los mejores productos de las mejores marcas, además que, contamos con colecciones exclusivas y limitadas. </p>   
      </section>

      <section>
        <div class="container w-50 m-auto text-center" id="equipo">
          <h1 class="mb-5 fs-2">Viste con  <span class="spin">Flow y Estilo</span>.</h1>
          <p class="fs-4 ">Contamos con sistema de pago por <b>Tarjeta (Crédito y Debito), PayPal y Mercado Pago</b>. Puedes adquirir nuestros productos y pagarlo en pagos a semanas o meses. También contamos con sistema de apartado de hasta 1 mes y garantía de 2 meses. </p>
        </div>

        <br>
        <div class="container">
          <div class="row">
          <div class="col-1"></div>
            <div class="col-4 "><center><h3 id="UbicacionVHA">Tienda física</h3></center><img class="Loc" src="vista/IMGPG/Local.jpg" alt="equipo" ></div>
            <div class="col-2"></div>
            <div class="col-4 "><center><h3>Ubicación</h3></center><iframe class="Loc" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470.75413787752416!2d-98.43551924457118!3d19.280926600000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfd47f2eddb9e9%3A0x5c4c02413c7c20cf!2sC.%20Independencia%20Sur%20216%2C%20Col%20Centro%2C%2074000%20San%20Mart%C3%ADn%20Texmelucan%20de%20Labastida%2C%20Pue.!5e0!3m2!1ses!2smx!4v1659743883788!5m2!1ses!2smx" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            <div class="col-1"></div>

          </div>
        </div>

        <div class="mt-5 text-center">
          <div class="container w-50 m-auto text-center" id="equipo">
            <p class="fs-4 "> Visita nuestra tienda que se encuentra ubicada en <b>Calle Independencia Sur #216, Colonia Centro, 74000 San Martín Texmelucan de Labastida, Puebla.</b> </p>
          </div>
        </div>
      </section>

      <br>
      <br>
      <br>
      <center><h1>NEW SEASON</h1></center>
      <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto">
        <img class="ImgHP" src="vista/IMGPG/Baner2.jpg">
        <br>
        <h1 class="p-3 fs-2 border-top border-3">Ven a visitarnos para ver el estreno de la nueva <b> HIP HOP COLLECTION</b>. No te pierdas los descuentos que hay por el <b>SPRING SALE</b>. ¡Ordena <b>YA! </b> que nuestra colección se está terminando.  <span class="spin">VOOGHA CS.</span></h1>
      </section>
      <br>
      <center><h2> Pagina Creada por la empresa  <b> <a class="GT" href="">Green Technology</a></b> </h2></center>
      <br>

      <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">Voogha CS. &copy; Todos Los Derechos Reservados 2022 &nbsp;@VooghaCs</p>
        <div id="iconos" >
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-whatsapp"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-envelope"></i></a>  
        </div>
      </footer>


      <script type="text/javascript" src="vista/js/bootstrap.bundle.min.js"></script>
      <script src="vista/js/Letras.js"></script>

    </body>
    </html>