<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="vista/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="vista/css/estiloCatalogo.css">

    <title>PlayerasVG</title>
  </head>
  <body>
    <header class=" ENC container-fluid  d-flex justify-content-center">
      <center><a  href="?m=index"><img class="LOGVG" src="vista/IMGPG/LOGOVOGA.jpg"></a></center>
    </header>
    <br>
    <center><h1>PLAYERAS</h1></center>
    <!-- TIPOS DE SERVICIOS-->
    <!--========================================================== -->


<section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">
        <?php for($i=0;$i<count($datos['nombre_producto']);$i++){ ?>
            <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap">
                <div>
                    <h3 class="fs-5 mt-4 px-4 pb-1"><?php echo $datos["nombre_producto"][$i] ?></h3>
                    <p class="px-4"><?php echo $datos["marca"][$i] ?> <center> <p><?php echo "$".$datos["precio"][$i] ?></p></center> </p>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

    
    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
  <p class="fs-5 px-3  pt-3">Voogha CS. &copy; Todos Los Derechos Reservados 2022&nbsp;&nbsp;@VooghaCs</p>
  <div id="iconos" >
      <a href="#"><i class="bi bi-facebook"></i></a>
      <a href="#"><i class="bi bi-whatsapp"></i></a>
      <a href="#"><i class="bi bi-instagram"></i></a>
      <a href="#"><i class="bi bi-envelope"></i></a>  
  </div>
</footer>

    <script type="text/javascript" src="vista/js/bootstrap.bundle.min.js"></script>

  </body>
</html>