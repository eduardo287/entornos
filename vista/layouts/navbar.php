<nav  class="Nav navbar navbar-expand-lg  "  id="menu">
  <div class="container">
    <a class="navbar-brand" href="#">
      <a class="navbar-brand" href="?m=index"><img class="LOGVG" src="vista/IMGPG/LOGOVOGA.jpg" alt="ImgLogo"></a>
    </a>
    <button class=" bop navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(!isset($_SESSION['usuario'])){ ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?m=formularioLoguearse">Iniciar Sesion</a>
          </li>
        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Bienvenido <?php echo $_SESSION['usuario'][1]?></a>
          </li>
          <li class="nav-item dropdown">
              <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Crud
              </a>
              <ul class="bot dropdown-menu">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="?m=agregarProduc">Agregar Producto</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="?m=eliminarProductoFormulario">Eliminar Producto</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="?m=actualizarProductoFormulario">Actualizar Producto</a>
                  </li>
              </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="?m=cerrar">CerrarSesion</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="#UbicacionVHA">Ubicacion</a>
        </li>
        <li class="nav-item dropdown">
        <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Catalogo
        </a>
        <ul class="bot dropdown-menu">
          <li><a class="dropdown-item" href="?m=sudaderas">Sudaderas</a></li>
          <li><a class="dropdown-item" href="?m=Playeras">Playeras</a></li>
          <li><a class="dropdown-item" href="?m=pants">Pants</a></li>
          <li><a class="dropdown-item" href="?m=chamarras">Chamarras</a></li>
        </ul>
      </li>
      </ul>
      <form class="d-flex">
        <input class=" bot form-control me-2" type="email" placeholder="Search" aria-label="Suscribete">
        <button class="boton btn btn-primary btn-primary-outline-success" type="button">Buscar</button>
      </form>
    </div
  </div>
</nav>