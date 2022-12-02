<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <title>Actualizar Producto</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="?m=actualizarProduct" class="p-5 m-2 border rounded shadow" method="POST" style="background-color:white;">
                  <div class="mb-3">
                    <legend class="form-label">Actualizar Producto</legend>
                  </div>
                  <div class="mb-3">
                    <label for="claveProducto" class="form-label">Clave de Producto</label>
                    <input type="number" class="form-control" id="claveProducto" name="claveProduct" placeholder="Clave Del Producto" required>
                  </div>
                  <div class="mb-3">
                    <label for="nombreProducto" class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" name="nomProduct" id="nombreProducto" placeholder="Nombre Del Producto" required>
                  </div>
                  <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" name="txtMarca" id="marca" placeholder="Marca" required>
                  </div>
                  <div class="mb-3">
                    <label for="precio" class="form-label">Precio </label>
                    <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio De Compra" required>
                  </div>
                  <div class="mb-3">
                    <label for="Talla" class="form-label">Talla</label>
                    <input type="text" class="form-control" name="talla" id="Talla" placeholder="Talla" required>
                  </div>
                  <div class="mb-3">
                    <label for="Color" class="form-label">Color</label>
                    <input type="text" class="form-control" name="color" id="Color" placeholder="Color" required>
                  </div>
                  <div class="mb-3">
                    <label for="txtCategoria">Categoria</label>
                    <select class="form-select form-select-s mb-3" name="categoria" aria-label=".form-select-sm example" id="txtProveedor">
                      <option value="sudaderas" selected>Sudaderas</option>
                      <option value="chamarras">Chamarras</option>
                      <option value="pants">Pants</option>
                      <option value="playeras">Playeras</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="unidades" class="form-label">Existencias</label>
                    <input type="number" class="form-control" name="existencias" id="unidades" placeholder="Unidades" required>
                  </div>
                  <button type="submit" class="btn btn-primary me-3">Guardar</button>
                  <a class="btn btn-secondary" href="index.php">Cerrar</a>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>