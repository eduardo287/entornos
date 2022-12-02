<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vista/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Eliminar Producto</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6 m-5">
            <form action="?m=eliminarProducto" method="post" class="p-5 shadow rounded m-5" style="background-color:white;">
                <div class="mb-3">
                    <legend class="form-label">Eliminar Producto</legend>
                </div>
                <div class="mb-3">
                    <label for="eliminarProducto" class="form-label">Clave del Producto</label>
                    <input type="text" id="eliminarProducto" class="form-control" name="claveProduct" placeholder="Escribe la Clave del Producto">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary me-3">Eliminar</button>
                    <a href="?m=elminarProductoFormulario" class="btn btn-secondary">Cerrar</a>
                </div>
            </form>
        </div>
    </div>
    </div>    
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>